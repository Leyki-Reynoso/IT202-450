<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h1 id = "scores">Competitions</h1>
    <div id = "scores">
        <?php
            //lr22 07/27/2022
            //get all the info to display
            $db = getDB();
            $stmt = $db->prepare("SELECT expires, name, id FROM Competitions WHERE expires > current_timestamp 
            ORDER BY expires DESC LIMIT 10");
            $stmt->execute();
            echo "ID".str_repeat('&nbsp;', 10)."Expiration date".str_repeat('&nbsp;', 19)."Name <br><br>";
            if($row = $stmt->fetch())
            {

                if($row == null){
                flash("no scores to display", "success");
                }
                else{
                    $id = $row['id'];
                    $name = $row['name'];
                    $expires = $row['expires'];
                    //diplay the the first set of info as a table
                    echo $id.str_repeat('&nbsp;', 10).$expires.str_repeat('&nbsp;', 10).$name.str_repeat('&nbsp;', 10)."<br>";
                    "<br>";   
                }
            }
            //diplay the other set of info
            while($row = $stmt->fetch())
            {
                $id = $row['id'];
                $name = $row['name'];
                $expires = $row['expires'];
                echo $id.str_repeat('&nbsp;', 10).$expires.str_repeat('&nbsp;', 10).$name."<br>";
            }
        ?>
    </div>
<form onsubmit="return join(this)" method="POST">
    <div>
        <label for="id">Write id of the competitoin you want to join</label>
        <input type="Number" name="id" required />
    </div>
    <input type="submit" />
</form>

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
