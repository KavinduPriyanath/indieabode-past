<?php

require '../db/database.php';

//error messages
$usernameExistsError = null;
$emailExistsError = null;
$passwordNotStrongError = null;
$passwordsDoNotMatchError = null;
$usernameError = null;
$emailError = null;

if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

    //insert into db
    $sql = "INSERT INTO gamer(firstName, lastName, username, email, password) VALUES ('$fname', '$lname', '$username', '$email', '$password')";

    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);



    $usernameSql = "SELECT * FROM gamer WHERE username='$username'";
    $usernameQuery = mysqli_query($conn, $usernameSql) or die("fialed");
    $usernameError = mysqli_fetch_assoc($usernameQuery);

    $emailSql = "SELECT * FROM gamer WHERE email='$email'";
    $emailQuery = mysqli_query($conn, $emailSql) or die("fialed");
    $emailError = mysqli_fetch_assoc($emailQuery);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $passwordNotStrongError = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    } else if (!empty($usernameError)) {
        $usernameExistsError = 'This username already exists';
    } else if (!empty($emailError)) {
        $emailExistsError = 'This email already exists';
    } else if ($password != $_POST['confirmPassword']) {
        $passwordsDoNotMatchError = 'Passwords do not match';
    } else if (mysqli_query($conn, $sql)) {
        header('Location: login.php');
    } else {
        echo "error";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<?php include("../components/loginnavbar.php"); ?>

<style>
    <?php
    include('../src/css/login.css');
    ?>
</style>

<div class="wrapper register-box">
    <div class="btn-box">
        <a href="/indieabode/pages/login.php"><button type="button" class="toggle-btn">Login</button></a>
        <a href="/indieabode/pages/register.php"><button type="button" class="toggle-btn">Register</button></a>
    </div>
    <form action="#" method="POST" id="form">
        <!--register form-->
        <div class="full-name">
            <div class="first-name">
                <label class="form-login-label" id="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="firstname" required />
            </div>
            <div class="last-name">
                <label class="form-login-label" id="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" placeholder="lastname" required /><br>
            </div>
        </div>
        <label class="form-login-label">Username</label> <br>
        <input type="text" name="username" id="user-name" placeholder="username" required /><br>

        <!--Display error Messages-->
        <?php if ($usernameError != null) { ?>
            <div class="errors-display" id="errors">
                <?php echo $usernameExistsError; ?>
            </div>
        <?php } ?>

        <label class="form-login-label">Email</label><br>
        <input type="text" name="email" id="title" placeholder="email" required /><br>

        <!--Display error Messages-->
        <?php if ($emailError != null) { ?>
            <div class="errors-display" id="errors">
                <?php echo $emailExistsError; ?>
            </div>
        <?php } ?>


        <label class="form-login-label">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Password" required /><br>


        <!--Display error Messages-->
        <?php if ($passwordNotStrongError != null) { ?>
            <div class="errors-display" id="errors">
                <?php echo $passwordNotStrongError; ?>
            </div>
        <?php } ?>


        <label class="form-login-label">Confirm Password</label><br>
        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" /><br><br>

        <!--Display error Messages-->
        <?php if ($passwordsDoNotMatchError != null) { ?>
            <div class="errors-display" id="errors">
                <?php echo $passwordsDoNotMatchError; ?>
            </div>
        <?php } ?>

        <!--  <div class="about-you">
                <p><b>About You</b></p>
                <input type="checkbox" name="" id="" value="">
                <label for="">I'm interested in playing and downloading games</label><br>
                <input type="checkbox" name="" id="" value="">
                <label for="">I'm interested in distributing content</label>
                <p>You can change your responses to these questions later, they are used to hint itch.io in how it should present itself to you.</p>
            </div> -->
        <input type="checkbox" name="" id="checkbox" value="" onclick="checkboxClicked()">
        <label for="" id="tos">I accept the terms of service </label><br>

        <button type="submit" name="submit" id="register">Register</button><br><br>

    </form>

</div>

<script>
    <?php include('../src/js/register.js'); ?>
</script>

<!--Including Footer-->
    <style>
         .register-footer{
            margin-top:160vh;
        }
        <?php include('../src/css/footer.css'); ?>
    </style>
    <?php include("../components/footer.php"); ?>


<script src="../src/js/navbarcopy.js"></script>

</html>