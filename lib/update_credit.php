<?php
    function update_credit(){
        //TODO save scores
        $db = getDB();
        $stmt = $db->prepare("SELECT id FROM Users");
        $stmt->execute();
        while($user = $stmt->fetch())
        {
            $params = [":user_id" => $user['id']];
            $stmt = $db->prepare("UPDATE Users set credits = (SELECT IF NULL(SUM(credit_diff), 0) FROM CreditHistory WHERE user_id = :user_id) WHERE id = :user_id");
            $stmt->execute($params);
        }
    }
?>

