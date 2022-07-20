<?php
    $type = $_POST['text'];

    if($_POST['text'] == "credit")
    {
        if (isset($_SESSION["user"])) {
            $db = getDB();
            $params = [":user_id" => get_user_id()];
            $stmt = $db->prepare("SELECT Credits FROM Users WHERE id = :user_id");
            $stmt->execute($params);
            $row = $stmt->fetch();
            echo $row["Credits"];
        }
    }
    if($_POST['text'] == "competition"){
        $name = 
        $duration = 
        $current_reward =
        $starting_reward =
        $join_free =
        $current_participants =
        $min_participants =
        $paid_out =
        $did_calc =
        $min_score =
        $first_place_per =
        $second_place_per =
        $third_place_per =
        $cost_to_create =
        $creaded_by =
        $expiration = DATEADD(day, duration, current_timestamp);
        $params = [":user_id" => get_user_id(), ":credit" => $credit , ":reason" => $reason];
        $stmt = $db->prepare("INSERT INTO CreditHistory (user_id, score, reason) VALUES(:user_id, :credit, :reason)");
        $stmt->execute($params);
    }
?>
