<?php
    $type = $_POST['text'];
    if (isset($_SESSION["user"])) {
        $db = getDB();
        $params = [":user_id" => get_user_id()];
        $stmt = $db->prepare("SELECT Credits FROM Users WHERE id = :user_id");
        $stmt->execute($params);
        $row = $stmt->fetch();
        echo $row["Credits"];
    }
?>
