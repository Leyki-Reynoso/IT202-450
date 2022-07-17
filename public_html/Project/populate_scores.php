<?php 
    require_once(__DIR__ . "/../../partials/nav.php");
?>
<?php 
    for($i  = 0; $i <= 30; $i++)
    {
        $db = getDB();
        $user = rand(19,21);
        $score = rand(0,100);
        $params = [":user_id" => $user, ":score" => $score];
        $stmt = $db->prepare("INSERT INTO Scores (user_id, score) VALUES(:user_id, :score)");
        $stmt->execute($params);
    }
?>