<?php
    require(__DIR__ . "/../../partials/nav.php");
    is_logged_in(true);
?>

<?php
    if (isset($_SESSION["user"])) {
        $name = $_POST["name"];
        $duration = $_POST["duration"];
        $starting_reward = $_POST["reward"];
        $join_fee = $_POST["cost"];
        $min_participants = $_POST["participants"];
        $min_score = $_POST["score"];
        $first_place_per = $_POST["first"];
        $second_place_per = $_POST["second"];
        $third_place_per = $_POST["third"];
        $cost_to_create = 1+$_POST["cost"] +$_POST["reward"];
        $creaded_by = get_user_id();
        //DATEADD(day, $duration, current_timestamp);
        $db = getDB();
        $params = [":name" => $name, ":duration" => $duration,
        ":current_reward" => $starting_reward,":starting_reward" => $starting_reward, ":join_fee" => $join_fee,
        ":current_participants" => $min_participants, ":min_participans"=>$min_participants, ":paid_out" => 0,
        ":did_calc" => 0 , ":min_score" => $min_score,":first_place_per" => $first_place_per, 
        "second_place_per" => $second_place_per, ":third_place_per" => $third_place_per, ":cost_to_create" => $cost_to_create,
         ":created_by" => $creaded_by];
        $stmt = $db->prepare("INSERT INTO Competitions (name, expires,
        current_reward, starting_reward, join_fee,
        current_participants, min_participants, paid_out, did_calc, min_score,
        first_place_per, second_place_per, third_place_per,
        cost_to_create, created_by) 
        VALUES(:name, DATE_ADD(current_timestamp, INTERVAL :duration DAY),
        :current_reward, :starting_reward, :join_fee,
        :current_participants, :min_participans, :paid_out, :did_calc, :min_score,
        :first_place_per, :second_place_per, :third_place_per,
        :cost_to_create, :created_by)");
        $stmt->execute($params);
        flash("submitted","success");
    }
?>
<?php
    require(__DIR__ . "/../../partials/flash.php");
?>