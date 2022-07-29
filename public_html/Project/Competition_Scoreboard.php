<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
    width: 300px;
    height: 30px;
            text-align: center;
            border-collapse: collapse;
            color: #2E2E2E;
            border: #A4A4A4;
            font-size: 20px;
}
table{
    text-align: center;
    border-collapse: collapse;
    color: #2E2E2E;
    border: #A4A4A4;
}
</style>
<?php
        $comp = true;
        $score = false;
        $db = getDB();
        $id = $_POST['ids'];
        $db = getDB();
        //select all the values you will need from competitions table
        $params1 = [":id"=>$id];
        $stmt = $db->prepare("SELECT name, created, expires
        FROM Competitions 
        WHERE id = :id LIMIT 10");
        $stmt->execute($params1);
        $row = $stmt->fetch();
        if(!$row)
        {
            $comp = false;
            $name = "competition does not exist";
            flash("competition does not exis", "warning");
        }
        else{
            $expires = $row['expires'];
            $created = $row['created'];
            $name = $row['name'];
        }
    ?>
<h2 id = "header"><?php echo $name;?></h2>

<div id = "scores">
    <body>
        <table>
        <tr>
            <th>username</th>
            <th>Score</th>
        </tr>
    <?php
    if($comp)
    {
        //get the scores
        if($comp = "false")
        $params = [":id" => $id, ":expires" => $expires, ":created" => $created];
        $stmt2 = $db->prepare("SELECT score, user_id
        FROM Scores WHERE user_id IN (SELECT user_id 
        FROM CompetitionParticipants 
        WHERE comp_id = :id) 
        AND  :created <= created <= :expires
        ORDER BY score DESC LIMIT 10");
        $stmt2->execute($params);
        $user_id = "";
        $username = "";
        while($scores = $stmt2->fetch()){
            $score = true;
            $params1 = [":id" => $scores['user_id']];
            $stmt3 = $db->prepare("SELECT username
            FROM Users WHERE id = :id");
            $stmt3->execute($params1); 
            $users = $stmt3->fetch();
            $user_id = se($scores['user_id'],"user_id",0,false);
            $username = se($users['username'],"username","",false);
            ?>
            <tr>
            <td><?php include(__DIR__ . "/../../partials/profile_link.php"); ?></td>
            <td><?php echo $scores['score'];?></td>
            </tr>
    <?php } 
    if(!$score)
    {
        flash("no scores avalible","warning");
    }
    }?>
    </table>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
