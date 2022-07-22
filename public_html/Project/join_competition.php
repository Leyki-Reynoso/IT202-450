<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php
    //get user and check if conditions are met in js.
    
    //submit infor into server.
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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