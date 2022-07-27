<?php
    //lr22 07/26/2022
    //extract and send the credit of the user.
    require(__DIR__ . "/../../lib/functions.php");
    session_start();
    //TODO save scores
    if (isset($_SESSION["user"])) {
        $db = getDB();
        $params = [":user_id" => get_user_id()];
        $stmt = $db->prepare("SELECT credits FROM Users WHERE id = :user_id");
        $stmt->execute($params);
        $row = $stmt->fetch();
        $credit = $row['credits'];
        echo $credit;
    }
?>