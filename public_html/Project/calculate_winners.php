<?php
require(__DIR__ . "/../../lib/functions.php");
session_start();
?>
<?php
    $id = array();
    $reward = array();
    $first = array();
    $second = array();
    $third = array();
    $expires = array();
    $created = array();
    $name = array();
    $db = getDB();
    //select all the values you will need from competitions table
    $stmt = $db->prepare("SELECT name, created, expires, id, current_participants, current_reward, first_place_per, second_place_per, third_place_per 
    FROM Competitions 
    WHERE expires >= current_timestamp AND  paid_out = 0 AND did_calc = 0 LIMIT 10");
    $stmt->execute();
    //save the needed values from table into arrays
    while($comp = $stmt->fetch())
    {
        if($comp['current_participants'] >= 3)
        {
            array_push($id, $comp['id']);
            array_push($reward, $comp['reward']);
            array_push($first, $comp['first']);
            array_push($second, $comp['second']);
            array_push($third, $comp['third']);
            array_push($expires, $comp['expires']);
            array_push($created, $comp['created']);
            array_push($name, $comp['name']);

        }
        else{
        //update paid_out for competitions with not enough participants
            $params0 = [":id" => $comp['id']];
            $stmt = $db->prepare("UPDATE Competitions 
            SET did_calc = 1 
            WHERE id = :id");
            $stmt->execute($params0);
        }
    }
    //got through each of the 10 compeitions
    for ($i = 0; $i < sizeof($id); $i++) 
    {
        //get the winners from current competition
        $params = [":id" => $id[$i], ":expires" => $expires[$i], ":created" => $created[$i]];
        $stmt = $db->prepare("SELECT user_id
        FROM Scores 
        WHERE user_id IN (
        SELECT user_id 
        FROM CompetitionParticipants 
        WHERE comp_id = :id) 
        AND  :created <= created <= :expires
        ORDER BY score DESC LIMIT 3");
        $stmt->execute($params);

        //first place creditHistory insertion
        $users = $stmt->fetch();
        $params1 = [":credit" => $reward[$id] * $first[$id], ":user_id" => $users['user_id'], ":name" => $name[$id]];
        $stmt = $db->prepare("INSERT CreditHistory (user_id, credit_diff, reason) VALUES (:user_id,:credit,'Won :credit credits for 1st place in Competition :name')");
        $stmt->excute($params1);
        //second place creditHistory insertion
        $users = $stmt->fetch();
        $params2 = [":credit" => $reward[$id] * $second[$id], ":user_id" => $users['user_id'], ":name" => $name[$id]];
        $stmt = $db->prepare("INSERT CreditHistory (user_id, credit_diff, reason) 
        VALUES (:user_id,:credit,'Won :credit credits for 2nd place in Competition :name')");
        $stmt->excute($params2);
        //third place creditHistory insertion
        $users = $stmt->fetch();
        $params3 = [":credit" => $reward[$id] * $third[$id], ":user_id" => $users['user_id'], ":name" => $name[$id]];
        $stmt = $db->prepare("INSERT CreditHistory (user_id, credit_diff, reason) 
        VALUES (:user_id,:credit,'Won :credit credits for third place in Competition :name')");
        $stmt->excute($params3);
        //update did_cal, paid_out, and credit of all players
        update_credit();
        $params4 = [":id" => $id[$i]];
        $stmt = $db->prepare("UPDATE Competitions SET did_calc = 1, SET paid_out = 1
        WHERE id = :id");
        $stmt->execute();
    }
?>
