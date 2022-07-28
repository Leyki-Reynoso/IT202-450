<?php 
    require_once(__DIR__ . "/../../partials/nav.php");
?>
<div id = "profile">
    <?php
        if(array_key_exists('week', $_POST)) {
            scoreBoard('week');
        }
        else if(array_key_exists('month', $_POST)) {
            scoreBoard('month');
        }
        else{
            scoreBoard('life');
        }
        //lr22 07/17/2022
        function scoreBoard($scoreType){
            $db = getDB();
            $params = [":user_id" => get_user_id()];
            if($scoreType == 'week')
            {
                $stmt = $db->prepare("SELECT user_id, score, created FROM Scores 
                WHERE created between date_sub(now(),INTERVAL 1 WEEK) and now() 
                ORDER BY score DESC LIMIT 10");
            }
            else if($scoreType == 'month')
            {
                $stmt = $db->prepare("SELECT user_id, score, created FROM Scores 
                WHERE created between date_sub(now(),INTERVAL 1 MONTH) and now() 
                ORDER BY score DESC LIMIT 10");
            }
            else if($scoreType == 'life')
            {
                $stmt = $db->prepare("SELECT user_id, score, created FROM Scores ORDER BY score DESC LIMIT 10");
            }
            $stmt->execute();
            echo "User".str_repeat('&nbsp;', 24)."Date created".str_repeat('&nbsp;', 24)."Scores <br><br>";

            if($row = $stmt->fetch())
            {
                if($row == null){
                flash("no scores to display", "success");
                }
                else{
                    $date = $row['created'];
                    $score = $row['score'];
                    $params = [":user_id" =>$row['user_id']];
                    $stmt2 = $db->prepare("SELECT username FROM Users WHERE id = :user_id");
                    $stmt2->execute($params);
                    $user = $stmt2->fetch();
                    echo $user.str_repeat('&nbsp;', 24).$date.str_repeat('&nbsp;', 10).$score."<br>";
                    include(__DIR__ . "/profile_link.php");
                }
            }
            while($row = $stmt->fetch())
            {
                $date = $row['created'];
                $score = $row['score'];
                $stmt2 = $db->prepare("SELECT username FROM Users WHERE id = :user_id");
                $stmt2->execute($params);
                $user = $stmt2->fetch();
                echo $user.str_repeat('&nbsp;', 24).$date.str_repeat('&nbsp;', 10).$score."<br>";
            }
        }
    ?>
        <form method="post">
            <input type="submit" name="week"
                    class="button" value="week" />
            <input type="submit" name="month"
                    class="button" value="month" />
            <input type="submit" name="life"
                    class="button" value="life" />
        </form>
</div>