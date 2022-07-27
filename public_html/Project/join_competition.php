<?php
require(__DIR__ . "/../../lib/functions.php");
session_start();
?>

<?php
if (isset($_SESSION["user"])) {
    //check competition exists
    $arr = ["1","1","1"];
    $id = (int)$_POST['text'];
    $db = getDB();
    $params = [":id" => $id];
    $stmt = $db->prepare("SELECT id, join_fee, name from Competitions WHERE id = :id");
    $stmt->execute($params);
    $row = $stmt->fetch();
    $join_fee = $row['join_fee'];
    $name = $row['name'];
    if(!$row)
    {
        $arr[0] = "0";
    }
    else{
        //check user is not in the competition already
        $params1 = [":user_id" => get_user_id()];
        $stmt = $db->prepare("SELECT user_id from CompetitionParticipants WHERE user_id = :user_id");
        $stmt->execute($params1);
        $row1 = $stmt->fetch();
        if($row1)
        {
            $arr[1] = "0";
        }
        //check user has enough money
        $params2 = [":user_id" => get_user_id()];
        $stmt = $db->prepare("SELECT credits from Users WHERE id = :user_id");
        $stmt->execute($params2);
        $row2 = $stmt->fetch();
        $credits = $row2['credits'];
        if($credits < $join_fee)
        {
            $arr[2] = "0";
        }
        //check all conditions are met
        if($arr[0] == "1" && $arr[1] == "1" && $arr[2] == "1"){  
            //insert participant
            $params3 = [":user_id" => get_user_id(), ":id" => $id];
            $stmt = $db->prepare("INSERT INTO CompetitionParticipants (comp_id, user_id) VALUES(:id, :user_id)");
            $stmt->execute($params3);
            $users = $stmt->fetch();
            //charge credit
            $params2 = [":credit" => -1*$join_fee, ":user_id" => get_user_id(), ":reason" => "spent ".$join_fee." credits to join ".$name];
            $stmt = $db->prepare("INSERT CreditHistory (user_id, credit_diff, reason) 
            VALUES (:user_id, :credit, :reason)");
            $stmt->execute($params2);
            update_credit();
            //update number of participants
            $stmt = $db->prepare("UPDATE Competitions SET current_participants = (SELECT COUNT(id) FROM CompetitionParticipants) WHERE id = :id");
            $stmt->execute($params);
        }
    }
    echo implode(" ",$arr);
}
?>
