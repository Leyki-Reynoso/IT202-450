<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$user_id = (int)se($_GET, "id", get_user_id(), false);
$isMe = $user_id == get_user_id();
$isEdit = isset($_GET["edit"]);

$db = getDB();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
if (isset($_POST["save"]) && $isMe && $isEdit){
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $vis = isset($_POST["vis"]) ? 1 : 0;
    $params = [":email" => $email, ":username" => $username, ":id" => get_user_id(), ":vis" => $vis];
    $db = getDB();
    $stmt = $db->prepare("UPDATE Users set email = :email, username = :username, visibility = :vis where id = :id");
    try {
        $stmt->execute($params);
        flash("Profile saved", "success");
    } catch (Exception $e) {
        if ($e->errorInfo[1] === 1062) {
            //https://www.php.net/manual/en/function.preg-match.php
            preg_match("/Users.(\w+)/", $e->errorInfo[2], $matches);
            if (isset($matches[1])) {
                flash("The chosen " . $matches[1] . " is not available.", "warning");
            } else {
                //TODO come up with a nice error message
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            //TODO come up with a nice error message
            echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }

    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        if ($new_password === $confirm_password) {
            //TODO validate current
            $stmt = $db->prepare("SELECT password from Users where id = :id");
            try {
                $stmt->execute([":id" => get_user_id()]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if (isset($result["password"])) {
                    if (password_verify($current_password, $result["password"])) {
                        $query = "UPDATE Users set password = :password where id = :id";
                        $stmt = $db->prepare($query);
                        $stmt->execute([
                            ":id" => get_user_id(),
                            ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                        ]);

                        flash("Password reset", "success");
                    } else {
                        flash("Current password is invalid", "warning");
                    }
                }
            } catch (Exception $e) {
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            flash("New passwords don't match", "warning");
        }
    }
}
//select fresh data from table
$stmt = $db->prepare("SELECT id, email, username,visibility, created from Users where id = :id LIMIT 1");
$isVisible = false;
try {
    $stmt->execute([":id" => $user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if ($isMe) {
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["username"] = $user["username"];
        }
        if (se($user, "visibility", 0, false) > 0) {

            $isVisible = true;
        }
        $email = se($user, "email", "", false);
        $username = se($user, "username", "", false);
        $joined = se($user, "created", "", false);
    } else {
        flash("User doesn't exist", "danger");
    }
} catch (Exception $e) {
    flash("An unexpected error occurred, please try again", "danger");
    //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
}
?>
<!-- lr22 07/26/2022 -->
<!-- display Credit: 0  in profile -->
<span>Credit:</span><span id = "cred">0</span>

<div id = "profile">
    <h1>Profile</h1>

    <?php if ($isMe && $isEdit) : ?>
        <?php if ($isMe) : ?>
            <a href="<?php echo get_url("profile.php"); ?>">View</a>
        <?php endif; ?>
        <form method="POST" onsubmit="return validate(this);">
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
            </div>
            <div class="mb-3">
                <div class="form-check form-switch">
                    <input <?php if ($isVisible) {
                                echo "checked";
                            } ?> class="form-check-input" type="checkbox" role="switch" id="vis" name="vis">
                    <label class="form-check-label" for="vis">Toggle Visibility</label>
                </div>
            </div>
            <!-- DO NOT PRELOAD PASSWORD -->
            <div class="mb-3">Password Reset</div>
            <div class="mb-3">
                <label class="form-label" for="cp">Current Password</label>
                <input class="form-control" type="password" name="currentPassword" id="cp" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="np">New Password</label>
                <input class="form-control" type="password" name="newPassword" id="np" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="conp">Confirm Password</label>
                <input class="form-control" type="password" name="confirmPassword" id="conp" />
            </div>
            <input type="submit" class="mt-3 btn btn-primary" value="Update Profile" name="save" />
        </form>
    <?php else : ?>
        <?php if ($isMe) : ?>
            <a href="?edit">Edit</a>
        <?php endif; ?>
        <?php if ($isVisible || $isMe) : ?>
            <div>
                This is <?php se($username); ?>
            </div>
            <div>
                Joined: <?php se($joined); ?>
            </div>
            <h1 id = "scores">top 10 Scores</h1>
        <div id = "scores">
        <?php
            $db = getDB();
            $params = [":username" => $username];
            $stmt = $db->prepare("SELECT score FROM Scores WHERE user_id IN( 
            SELECT user_id 
            FROM Users
            WHERE username = :username)
            ORDER BY score DESC LIMIT 10");
            $stmt->execute($params);
            if($row = $stmt->fetch())
            {
                if($row == null){
                flash("no scores to display", "success");
                }
                else{
                    $name = $row['score'];
                    echo "$name<br>";
                    while($row = $stmt->fetch())
                    {
                        $name = $row['score'];
                        echo "$name<br>";
                    }
                }
            }
        ?>
        </div>
        <?php else : ?>
            Profile is private
            <?php
            $path = "home.php";
            flash("Profile is private", "warning");
                //https://www.php.net/manual/en/function.headers-sent.php#90160
                /*headers are sent at the end of script execution otherwise they are sent when the buffer reaches it's limit and emptied */
                if (!headers_sent()) {
                    //php redirect
                    die(header("Location: " . get_url($path)));
                }
                //javascript redirect
                echo "<script>window.location.href='" . get_url($path) . "';</script>";
                //metadata redirect (runs if javascript is disabled)
                echo "<noscript><meta http-equiv=\"refresh\" content=\"0;url=" . get_url($path) . "\"/></noscript>";
                die();
            ?>
        <?php endif; ?>
</div>
<?php endif; ?>

<script>
    //lr22 07/26/2022
    //ajax call to credit/php
    $.ajax({
        method: "POST",
        url: "credit.php",
        data: {text: "0"}
    }).done(function(response) {
        document.getElementById("cred").innerHTML = response
    });
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....
        upattern = /^[a-z0-9_-]{3,16}$/;
        epattern = /[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
        if (!epattern.test(form.elements["email"].value))
        {
            flash("You have entered an invalid email", "warning");
            isValid = false;
        }
        if(!upattern.test(form.elements["username"].value))
        {
            flash("You have entered an invalid username", "warning");
            isValid = false;
        }
        if(pw.length < 8)
        {
            flash("password must be atleast 8 characters long","warning");
            isValid = false;
        }
        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (pw !== con) {
            flash("Password and Confrim password must match", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>