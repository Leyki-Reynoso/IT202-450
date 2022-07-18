<?php
    require(__DIR__ . "/../../lib/functions.php");
    session_start();
    //TODO save scores
    $credit = $_POST['credit'];
    $reason = $_POST['reason'];
    if (isset($_SESSION["user"])) {
        $db = getDB();
        $params = [":user_id" => get_user_id(), ":credit" => $credit , ":reason" => $reason];
        $stmt = $db->prepare("INSERT INTO CreditHistory (user_id, score, reason) VALUES(:user_id, :credit, :reason)");
        $stmt->execute($params);
        $params = [":user_id" => get_user_id(), ":credits" => $credit];
        $stmt = $db->prepare("UPDATE Users set credits = (SELECT IFNULL(SUM(diff), 0) FROM CreditHistory WHERE user_id = :user_id) WHERE id = :user_id");
        $stmt->execute($params);
    }
?>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>