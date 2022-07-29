<?php
    require(__DIR__ . "/../../lib/functions.php");
    session_start();
    //TODO save scores
    $score = $_POST['text'];
    if (isset($_SESSION["user"])) {
        $db = getDB();
        $params = [":user_id" => get_user_id(), ":score" => $score];
        $stmt = $db->prepare("INSERT INTO Scores (user_id, score) VALUES(:user_id, :score)");
        $stmt->execute($params);
        flash("Successfully saved!", "success");

        echo "saved";
    }
    else{
        echo "not saved";
    }
?>

