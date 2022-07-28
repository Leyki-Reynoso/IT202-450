<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
    width: 800px;
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
<h2 id = "header">Competition History</h2>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div id = "socreform">
    <div id = "srot">
        <body>
            <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Participants</th>
                <th>Reward</th>
                <th>Expires</th>
                <th>Creator?</th>
            </tr>
        <?php
        if (isset($_SESSION["user"])) {
            //get the scores
            $db = getDB();
            $offset = 10;
            $param = [":id" => get_user_id()];
            $stmt = $db->prepare("SELECT COUNT(id) FROM Competitions 
            WHERE id IN (SELECT comp_id FROM CompetitionParticipants WHERE user_id = :id)");
            $stmt->execute($param);
            $count = $stmt->fetch();
            $tabs = ceil($count['COUNT(id)']/$offset);
            $db = getDB();
            if(!isset($_GET['page'])){
                $page = 1;
            }
            else{
                $page = $_GET['page'];
            }
            //get the score
            $params = [":f" => $offset, ":s" => ($page-1)*10,":id" => get_user_id()];
            $stmt = $db->prepare("SELECT id, name, current_participants, current_reward, expires, created_by 
            FROM Competitions WHERE id IN (SELECT comp_id FROM CompetitionParticipants WHERE user_id = :id)  
            ORDER BY expires DESC LIMIT :s, :f");
            foreach ($params as $key => $value)
            {
                $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
                $stmt->bindValue($key, $value, $type);
            }
            $params = null;           
            $stmt->execute($params);
            while($row = $stmt->fetch()){
                if($row['created_by'] != get_user_id())
                {
                    $response = "YES";
                }
                else{
                    $response = "NO";
                }
                $date = strtotime($row['expires']);
                $now = time();
                if($date < $now){
                    $response2 = "expired";
                }
                else{
                    $response2 = $row['expires'];
                }
                ?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['current_participants'];?></td>
                <td><?php echo $row['current_reward'];?></td>
                <td><?php echo $response2;?></td>
                <td><?php echo $response?></td>
                </tr>
        <?php } 
        }?>
        </table>
    </div>
    <div id = "paging">
        <?php
            for($page = 1; $page<=$tabs; $page++)
            {
                echo '<li><a href="Competitions_History.php?page='.$page.'">'. $page .'</a></li>';
            }
        ?>
    </div>
    <form onsubmit="return true" action = "Competition_Scoreboard.php" method="POST">
        <div>
            <label for="ids">Write id of the competition you want to see</label>
            <input type="Number" name="ids" required />
        </div>
        <input type="submit" />
    </form>

</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>