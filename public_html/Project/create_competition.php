<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php
    if($_POST)
    {
        if (isset($_SESSION["user"])) {
            $name = $_POST["name"];
            $duration = $_POST["duration"];
            $starting_reward = $_POST["reward"];
            $join_fee = $_POST["cost"];
            $min_participants = $_POST["participants"];
            $min_score = $_POST["score"];
            $first_place_per = $_POST["first"];
            $second_place_per = $_POST["second"];
            $third_place_per = $_POST["third"];
            $cost_to_create = 1+$_POST["cost"] +$_POST["participants"];
            $creaded_by = get_user_id();
            //DATEADD(day, $duration, current_timestamp);
            $db = getDB();
            $params = [":name" => $name, ":duration" => $duration,
            ":current_reward" => $starting_reward,":starting_reward" => $starting_reward, ":join_fee" => $join_fee,
            ":current_participants" => 0, ":min_participans"=>$min_participants, ":paid_out" => 0,
            ":did_calc" => 0 , ":min_score" => $min_score,":first_place_per" => $first_place_per, 
            "second_place_per" => $second_place_per, ":third_place_per" => $third_place_per, ":cost_to_create" => $cost_to_create,
            ":created_by" => $creaded_by];
            $stmt = $db->prepare("INSERT INTO Competitions (name, expires,
            current_reward, starting_reward, join_fee,
            current_participants, min_participants, paid_out, did_calc, min_score,
            first_place_per, second_place_per, third_place_per,
            cost_to_create, created_by) 
            VALUES(:name, DATE_ADD(current_timestamp, INTERVAL :duration DAY),
            :current_reward, :starting_reward, :join_fee,
            :current_participants, :min_participans, :paid_out, :did_calc, :min_score,
            :first_place_per, :second_place_per, :third_place_per,
            :cost_to_create, :created_by)");
            $stmt->execute($params);
            flash("submitted","success");
            $params2 = [":credit" => -1*$cost_to_create, ":user_id" => get_user_id(), ":reason" => "created competion ".$name."for ".$cost_to_create." credits"];
            $stmt = $db->prepare("INSERT CreditHistory (user_id, credit_diff, reason) 
            VALUES (:user_id, :credit, :reason)");
            $stmt->execute($params2);
            update_credit();
        }
    }
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div id = "competition">
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="reward">starting reward of competition</label>
        <input type="Number" name="reward" required />
    </div>
    <div>
        <label for="name">Name of the competition</label>
        <input type="text" name="name" required />
    </div>
    <div>
        <label for="first">percentage for 1st place</label>
        <input type="Number" name="first" required/>
    </div>
    <div>
        <label for="second">percentage for 2nd place</label>
        <input type="Number" name="second" required/>
    </div>
    <div>
        <label for="third">percentage for 3rd place</label>
        <input type="Number" name="third" required/>
    </div>
    <div>
        <label for="duration">Duration of competition</label>
        <input type="Number" name="duration" required/>
    </div>
    <div>
        <label for="cost">Cost to join</label>
        <input type="Number" name="cost" required/>
    </div>
    <div>
        <label for="score">Minimun Score to qualify</label>
        <input type="Number" name="score" required/>
    </div>
    <div>
        <label for="participants">Minimun participants to play</label>
        <input type="Number" name="participants" required/>
    </div>
    <input type="submit" value="Register" />
</form>
</div>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        let percentages = Number(form.elements["first"].value) + Number(form.elements["second"].value) + Number(form.elements["third"].value);
        let price = 1+Number(form.elements["cost"].value) + Number(form.elements["reward"].value);
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
        if(form.elements["cost"].value < 0)
        {
            flash("Cost must be 0 or greater", "warning");
            isValid = false;
        }
        if(form.elements["duration"].value < 0)
        {
            flash("Cost must be 0 or greater", "warning");
            isValid = false;
        }
        if(form.elements["score"].value < 0)
        {
            flash("minimun score must be 0 or greater", "warning");
            isValid = false;
        }
        if(form.elements["participants"].value < 3)
        {
            flash("minimun ammount of participants must be 3 or greater", "warning");
            isValid = false;
        }
        function change(credits){
            if(parseInt(credits) < parseInt(price)){
                flash("you don't have enough money to pay for the competetition you need: ", "warning");
                isValid = false;
            }
        }
        $.ajax({
        method: "POST",
        url: "retrive_credit.php",
        data: {text: "credit"},
        async: false,
        success: change,
        })
        if(isValid == true)
        {
            flash("submitted","success");
        }
        return isValid;
    }
</script>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>