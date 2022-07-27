<?php
    //lr22 07/26/2022
    //this function updates all user credits 
    function update_credit(){
        //TODO save scores
        $db = getDB();
        $stmt = $db->prepare("SELECT DISTINCT user_id 
        FROM CreditHistory");
        $stmt->execute();
        while($user = $stmt->fetch())
        {
            $params = [":user_id" => $user['user_id']];
            $stmt2 = $db->prepare("UPDATE Users set credits = (SELECT SUM(credit_diff)
            FROM CreditHistory WHERE user_id = :user_id) 
            WHERE id = :user_id");
            $stmt2->execute($params);
        }
    }
?>

