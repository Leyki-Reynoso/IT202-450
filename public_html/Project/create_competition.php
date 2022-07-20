<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div id = "competition">
<form onsubmit="return validate(this)" method="POST" action = "./insert_into_competition.php">
    <div>
        <label for="reward">starting reward of competition</label>
        <input type="text" name="reward" required />
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
        let percentages = form.elements["first"].value + form.elements["second"].value + form.elements["third"].value;
        let price = 1+form.elements["cost"].value + form.elements["participants"];
        let isValid = true;
        if(form.elements["credits"].value < 1)
        {
            flash("starting reward must be atleast 1", "warning");
            isValid = false; 
        }
        if (percentages != 100)
        {
            flash("percentages must add up to 100", "warning");
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
        if(form.elements["participants"].value < 0)
        {
            flash("minimun ammount of participants must be 3 or greater", "warning");
            isValid = false;
        }
        $.ajax({
        method: "POST",
        url: "retrive_credit.php",
        data: {text: "credit"}
        }).done(function(response) {
            if(response != price)
            {
                flash("you don't have enough money to pay for the competetition(cost to entrance + starting reward + 1)", "warning");
                isValid = false
            }
        });
        if(isValid)
        {
            flash("submitted","success");
        }
        return isValid;
    }

</script>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>