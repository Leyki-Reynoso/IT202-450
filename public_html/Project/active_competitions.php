<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<h1 id = "scores">Competitions</h1>
    <div id = "scores">
        <?php
            $db = getDB();
            $stmt = $db->prepare("SELECT expires, name, id FROM Competitions ORDER BY expires DESC LIMIT 10");
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
                    echo $id.str_repeat('&nbsp;', 10).$expires.str_repeat('&nbsp;', 10).$name.str_repeat('&nbsp;', 10)."<br>";
                    "<br>";
                    
                }
            }
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
    <input type="submit" value="Join" />
</form>

<script>
    function join(form){
        id = form.elements["id"].value
        $.ajax({
        method: "POST",
        url: "join_competition.php",
        data: {text: id},
        }).done(function(reponse){
            //use the array to output the errors
            if(reponse[0] == 0)
            {
                flash("competition does not exists","warning")
            }
            if(reponse[1] == 0)
            {
                flash("user already registered","warning")
            }
            if(reponse[2] == 0)
            {
                flash("you don't have enough money","warning")
            }
            if(reponse[0] == 1 && reponse[1] == 1 && reponse[2] == 1){
                flash("you have joined the competition","success")
            }
        })
    }
</script>
