<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
    width: 300px;
    height: 30px;
            text-align: center;
            border-collapse: collapse;
            color: #2E2E2E;
            border: #A4A4A4;
            font-size: 20px;
}
table{
    text-align: center;
    border-collapse: collapse;
    color: #2E2E2E;
    border: #A4A4A4;
}
</style>
<h2 id = "header">active competitions</h2>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div id = "socreform">
    <div id = "srot">
        <body>
            <table>
            <tr>
                <th>ID</th>
                <th>Expiration date</th>
                <th>Name</th>
            </tr>
        <?php
            $db = getDB();
            $offset = 10;
            $stmt = $db->prepare("SELECT COUNT(id) FROM Competitions WHERE expires > current_timestamp ");
            $stmt->execute();
            $count = $stmt->fetch();
            $tabs = ceil($count['COUNT(id)']/$offset);
            $db = getDB();
            if(!isset($_GET['page'])){
                $page = 1;
            }
            else{
                $page = $_GET['page'];
            }
            //get the score
            $params = [":f" => $offset, ":s" => ($page-1)*10];
            $stmt = $db->prepare("SELECT expires, name, id FROM Competitions WHERE expires > current_timestamp 
            ORDER BY expires DESC LIMIT :s, :f");
            foreach ($params as $key => $value)
            {
                $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
                $stmt->bindValue($key, $value, $type);
            }
            $params = null;

            $stmt->execute($params);
            while($row = $stmt->fetch()){?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['expires'];?></td>
                <td><?php echo $row['name'];?></td>
                </tr>
        <?php }         ?>
        </table>
    </div>
    <div id = "paging">
        <?php
            for($page = 1; $page<=$tabs; $page++)
            {
                echo '<li><a href="active_competitions.php?page='.$page.'">'. $page .'</a></li>';
            }
        ?>
    </div>
    <form onsubmit="return join(this)" method="POST">
        <div>
            <label for="id">Write id of the competition you want to join</label>
            <input type="Number" name="id" required />
        </div>
        <input type="submit" />
    </form>
    <form onsubmit="return true" action = "Competition_Scoreboard.php" method="POST">
        <div>
            <label for="ids">Write id of the competition you want to see</label>
            <input type="Number" name="ids" required />
        </div>
        <input type="submit" />
    </form>
</div>
<script>
function join(form){
    var isValid = true;
    id = form.elements["id"].value;
    var arr;
    function set(response){
        arr = response.split(" ");
    }
    $.ajax({
    method: "POST",
    url: "join_competition.php",
    data: {text: id},
    async: false,
    success: set,
    })
    if(arr[0] == 0)
    {
        flash("competition does not exists","warning");
        isValid = false;
    }
    if(arr[1] == 0)
    {
        flash("user already registered","warning");
        isValid = false;
    }
    if(arr[2] == 0)
    {
        flash("you don't have enough money","warning");
        isValid = false;
    }
    if(isValid == true)
    {
        flash("you have joined","success");
    }
    return false;
}
</script>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
