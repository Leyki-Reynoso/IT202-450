<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<h1 id = "scores">Competitions</h1>
    <div id = "scores">
        <?php
            $db = getDB();
            $stmt = $db->prepare("SELECT expires, name FROM Competitions ORDER BY expires DESC LIMIT 10");
            $stmt->execute();
            if($row = $stmt->fetch())
            {
                if($row == null){
                flash("no scores to display", "success");
                }
                else{
                    $name = $row['name'];
                    $expires = $row['expires'];
                    echo $expires.str_repeat('&nbsp;', 10).$name.str_repeat('&nbsp;', 10)."<a href=join_competition.php>join</a>"."<br>";
                    "<br>";
                    
                }
            }
            while($row = $stmt->fetch())
            {
                $name = $row['name'];
                $expires = $row['expires'];
                echo $expires.str_repeat('&nbsp;', 10).$name."<br>";
            }
        ?>
    </div>
