<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<?php
if (isset($_SESSION["user"])) {
    //check competition exists
    $arr = [1,1,1];
    $id = $_POST['text'];
    $db = getDB();
    $params = [":id" => $id];
    $stmt = $db->prepare("SELECT id, join_fee from Competitions WHERE id = :id");
    $stmt->execute($params);
    $row = $stmt->fetch();
    if($row['id'] == null){
        $arr[0] = 0;
    }
    //check user is not in the competition already
    $params1 = [":user_id" => get_user_id()];
    $stmt = $db->prepare("SELECT user_id from CompetitionParticipants WHERE user_id = :user_id");
    $stmt->execute($params1);
    $row1 = $stmt->fetch();
    if($row1['user_id'] != null)
    {
        $arr[1] = 0;
    }
    //check user has enough money
    $params2 = [":user_id" => get_user_id()];
    $stmt = $db->prepare("SELECT credits from Users WHERE user_id = :user_id");
    $stmt->execute($params2);
    $row2 = $stmt->fetch();
    if($row2['credits'] < $row['join_fee'])
    {
        $arr[1] = 0;
    }
    //check all conditions are met
    if(array_sum($arr) == 3){ 
        $params3 = [":user_id" => get_user_id(), ":id" => $id];
        $stmt = $db->prepare("INSERT INTO CompetitionParticipants (comp_id, user_id) VALUES(:id, :user_id)");
        $stmt->execute($params3);
    }
    //do calculations for the reward

    return $arr;
}
?>
