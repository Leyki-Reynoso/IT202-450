<?php
require_once(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "/home.php"));
}
?>
<?php
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $starting_reward = $_POST['reward'];
        $join_fee = $_POST['cost'];
        $min_participants = $_POST['participants'];
        $min_score = $_POST['score'];
        $first_place_per = $_POST['first'];
        $second_place_per = $_POST['second'];
        $third_place_per = $_POST['third'];
        $duration = $_POST['duration'];
        //DATEADD(day, $duration, current_timestamp);
        $db = getDB();
        $params = [":name" => $name, ":duration" => $duration,
        ":starting_reward" => $starting_reward, ":join_fee" => $join_fee,
        ":min_participants"=>$min_participants, ":min_score" => $min_score,":first_place_per" => $first_place_per, 
        ":second_place_per" => $second_place_per, ":third_place_per" => $third_place_per, ":id" => $id];
        $stmt = $db->prepare("UPDATE Competitions SET name = :name, expires = DATE_ADD(current_timestamp, INTERVAL :duration DAY),
        starting_reward = :starting_reward, join_fee = :join_fee,
        min_participants = :min_participants, min_score = :min_score,
        first_place_per = :first_place_per, second_place_per = :second_place_per, 
        third_place_per = :third_place_per WHERE id = :id");
        $stmt->execute($params);
        flash("submitted","success");
    }
?>

<?php   
    if(isset($_POST['ids'])){
        $id = $_POST['ids'];
    }
    $comp = true;
    $db = getdb();
    $params = [":id" => $id];
    $stmt = $db->prepare("SELECT name, created, id, min_score, expires,
    min_participants, starting_reward, paid_out, first_place_per, second_place_per,join_fee, third_place_per 
    FROM Competitions WHERE id = :id");
    $stmt->execute($params);
    $comp = $stmt->fetch();
    if($comp['paid_out'] == 1){
        $comp = false;
    }
?>
<?php if($comp == true):?>

<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="id">id</label>
        <input type="text" name="id" value="<?php echo $id?>" readonly>
    </div>
    <div>
        <label for="reward">starting reward of competition</label>
        <input type="Number" name="reward" value = "<?php echo $comp['starting_reward'];?>"/>
    </div>
    <div>
        <label for="name">Name of the competition</label>
        <input type="text" name="name" value = "<?php echo $comp['name']?>" />
    </div>
    <div>
        <label for="first">percentage for 1st place</label>
        <input type="Number" name="first" value = "<?php echo $comp['first_place_per']?>"/>
    </div>
    <div>
        <label for="second">percentage for 2nd place</label>
        <input type="Number" name="second" value = "<?php echo $comp['second_place_per']?>"/>
    </div>
    <div>
        <label for="third">percentage for 3rd place</label>
        <input type="Number" name="third" value = "<?php echo $comp['third_place_per']?>"/>
    </div>
    <div>
        <label for="duration">how much do you wish to extend(current deadline: "<?php echo $comp['expires']?>")</label>
        <input type="Number" name="duration" value= "<?php echo 0?>" />
    </div>
    <div>
        <label for="cost">Cost to join</label>
        <input type="Number" name="cost" value = "<?php echo $comp['join_fee']?>"/>
    </div>
    <div>
        <label for="score">Minimun Score to qualify</label>
        <input type="Number" name="score" value = "<?php echo $comp['min_score']?>"/>
    </div>
    <div>
        <label for="participants">Minimun participants to play</label>
        <input type="Number" name="participants" value = "<?php echo $comp['min_participants']?>"/>
    </div>
    <input type="submit" value="Update" />
</form>
<?php
    else :
        flash("competition is not modifiable", "warning");
    endif;
?>

<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        let percentages = Number(form.elements["first"].value) + Number(form.elements["second"].value) + Number(form.elements["third"].value);
        var isValid = true;

        if(form.elements["reward"].value < 1)
        {
            flash("starting reward must be atleast 1", "warning");
            isValid = false; 
        }
        if (percentages != 100)
        {
            flash("your percentages add up to 100", "warning");
            isValid = false;
        }

        if(Number(form.elements["cost"].value) < 0)
        {
            flash("Cost must be 0 or greater", "warning");
            isValid = false;
        }

        if(Number(form.elements["duration"].value) < 0)
        {
            flash("Cost must be 0 or greater", "warning");
            isValid = false;
        }

        if(Number(form.elements["score"].value) < 0)
        {
            flash("minimun score must be 0 or greater", "warning");
            isValid = false;
        }
        if(Number(form.elements["participants"].value) < 3)
        {
            flash("minimun ammount of participants must be 3 or greater", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require(__DIR__ . "/../../../partials/flash.php");

?>