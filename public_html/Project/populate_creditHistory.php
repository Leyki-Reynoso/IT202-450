<?php 
    require_once(__DIR__ . "/../../partials/nav.php");
?>
<?php 
    for($i  = 0; $i < 4; $i++)
    {
        $db = getDB();
        $params1 = [":credit" => 100, ":user_id" => $i+19, ":reason" => "courtesy points 100 credtis added to everyone"];
        $stmt = $db->prepare("INSERT CreditHistory (user_id, credit_diff, reason) VALUES (:user_id,:credit, :reason)");
        $stmt->execute($params1);
    }
?>