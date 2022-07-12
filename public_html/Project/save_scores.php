<?php
    //TODO save scores
    $score = $_REQUEST['q'];
    if (is_logged_in(true)) {
        $db = getDB();
        $params = [":user_id" => get_user_id(), ":score" => $score];
        $stmt = $db->prepare("INSERT INTO Scores (user_id, score) VALUES(:user_id, :score)");
        try {
            $stmt->execute($params);
            flash("Successfully registered!", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        error_log("Session data: " . var_export($_SESSION, true));
    }
    
?>