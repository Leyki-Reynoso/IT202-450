<?php
    require(__DIR__ . "/../../lib/functions.php");
    session_start();
    $db = getDB();
    $stmt = $db->prepare("SELECT score FROM Scores ORDER BY created DESC");
    $stmt->execute();
    while($row = $stmt->fetch())
    {
        $name = $row['score'];
        echo "$name<br>";
    }
?>