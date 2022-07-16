<?php 
    require_once(__DIR__ . "/../../partials/nav.php");
?>
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
    function scoreBoard($scoreType){
        $db = getDB();
        $params = [":user_id" => get_user_id()];
        if($scoreType == 'week')
        {
            $stmt = $db->prepare("SELECT score, created FROM Scores where created between date_sub(now(),INTERVAL 1 WEEK) and now() ORDER BY created DESC LIMIT 10");
        }
        else if($scoreType == 'month')
        {
            $stmt = $db->prepare("SELECT score, created FROM Scores where created between date_sub(now(),INTERVAL 1 WEEK) and now() ORDER BY created DESC LIMIT 10");
        }
        else if($scoreType == 'life')
        {
            $stmt = $db->prepare("SELECT score, created FROM Scores ORDER BY created DESC LIMIT 10");
        }
        $stmt->execute();
        echo "Date created".str_repeat('&nbsp;', 24)."Scores <br><br>";

        if($row = $stmt->fetch())
        {
            if($row == null){
            flash("no scores to display", "success");
            }
            else{
                $date = $row['created'];
                $score = $row['score'];
                echo $date.str_repeat('&nbsp;', 10).$score."<br>";
                
            }
        }
        while($row = $stmt->fetch())
        {
            $date = $row['created'];
            $score = $row['score'];
            echo $date.str_repeat('&nbsp;', 10).$score."<br>";
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
