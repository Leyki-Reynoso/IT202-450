<?php 
    require_once(__DIR__ . "/../../partials/nav.php");
?>
<button type="button" onclick="week()">Weekly</button>
<button type="button" onclick="month()">Monthly</button>
<button type="button" onclick="life()">Lifetime</button>
<?php
    $db = getDB();
    $params = [":user_id" => get_user_id()];
    $stmt = $db->prepare("SELECT score FROM Scores WHERE   ORDER BY created DESC LIMIT 10");
    $stmt->execute($params);
    if($row = $stmt->fetch())
    {
        if($row == null){
        flash("no scores to display", "success");
        }
        else{
            $name = $row['score'];
            echo "$name<br>";
        }
    }
    while($row = $stmt->fetch())
    {
        $name = $row['score'];
        echo "$name<br>";
    }
?>
