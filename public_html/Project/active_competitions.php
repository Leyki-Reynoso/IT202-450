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
            if(array_key_exists('week', $_POST)) {
                scoreBoard('next');
            }
            else if(array_key_exists('month', $_POST)) {
                scoreBoard('previous');
            }
            else{
                scoreBoard('none');
            }
            function scoreBoard($response)
            {
            $start = 0;
            //get the scores
            if($response == 'next'){
                $start = $start+10;
                
            }
            else if($response == 'previous'){
                $start = $start-10;
            }
            $db = getDB();
            $finish = $start+10;
            $params = [":s" => $start, ":f" => $finish];
            $stmt = $db->prepare("SELECT expires, name, id FROM Competitions WHERE expires > current_timestamp 
            ORDER BY expires DESC LIMIT :s , :f");
            $stmt->execute($params);
            while($row = $stmt->fetch()){
                ?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['expires'];?></td>
                <td><?php echo $row['name'];?></td>
                </tr>
        <?php } 
        }?>
        </table>
    </div>
    <form method="post">
                <input type="submit" name="week"
                        class="button" value="next" />
                <input type="submit" name="life"
                        class="button" value="previous" />
        </form>
    <form onsubmit="return true" action = "Competition_Scoreboard.php" method="POST">
        <div>
            <label for="ids">Write id of the competition you want to see</label>
            <input type="Number" name="ids" required />
        </div>
        <input type="submit" />
    </form>

    <form onsubmit="return join(this)" method="POST">
        <div>
            <label for="id">Write id of the competition you want to join</label>
            <input type="Number" name="id" required />
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
