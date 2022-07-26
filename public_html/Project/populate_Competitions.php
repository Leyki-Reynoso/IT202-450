<?php 
    require_once(__DIR__ . "/../../partials/nav.php");
?>
<?php 
    for($i  = 0; $i <= 30; $i++)
    {
        $db = getDB();
        $user = rand(19,21);
            $name = "comp".strval($i);
            $duration = 1;
            $starting_reward = 3;
            $join_fee = 0;
            $min_participants = 3;
            $min_score = 0;
            $first_place_per = 50;
            $second_place_per = 35;
            $third_place_per = 15;
            $cost_to_create = 4;
            $creaded_by = $user;
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