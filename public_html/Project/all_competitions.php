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
<h2 id = "header">active competitions</h2>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div id = "socreform">
    <div id = "srot">
        <body>
            <table>
            <tr>
                <th>ID</th>
                <th>Expiration date</th>
                <th>Name</th>
            </tr>
        <?php
            //get the scores
            $db = getDB();
            $stmt = $db->prepare("SELECT expires, name, id FROM Competitions 
            ORDER BY expires DESC LIMIT 10");
            $stmt->execute();
            $stmt->execute();
            while($row = $stmt->fetch()){
                ?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['expires'];?></td>
                <td><?php echo $row['name'];?></td>
                </tr>
        <?php } ?>
        </table>
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
