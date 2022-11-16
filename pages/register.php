<?php

require '../db/database.php';


if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //insert into db
    $sql = "INSERT INTO gamer(firstName, lastName, username, email, password) VALUES ('$fname', '$lname', '$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
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
        <br><br>
        <div class="full-name">
            <div class="first-name">
                <label class="form-login-label" id="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="firstname" required />
            </div>
            <div class="last-name">
                <label class="form-login-label" id="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" placeholder="lastname" required /><br>
            </div>
        </div><br><br>
        <label class="form-login-label">Username</label><br>
        <input type="text" name="username" id="username" placeholder="username" required /><br>
        <p>Pattern: 4-50 length, only alphanumeric or -_chars</p><br><br><br>

        <label class="form-login-label">Email</label><br>
        <input type="email" name="email" id="title" placeholder="email" required /><br><br><br><br>
        <label class="form-login-label">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Password" required /><br><br><br><br>
        <label class="form-login-label">Confirm Password</label><br>
        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" /><br><br>
        <!--  <div class="about-you">
                <p><b>About You</b></p>
                <input type="checkbox" name="" id="" value="">
                <label for="">I'm interested in playing and downloading games</label><br>
                <input type="checkbox" name="" id="" value="">
                <label for="">I'm interested in distributing content</label>
                <p>You can change your responses to these questions later, they are used to hint itch.io in how it should present itself to you.</p>
            </div> -->
        <br><br><br><br>
        <input type="checkbox" name="" id="" value="">
        <label for="" id="tos">I accept the terms of service </label><br><br><br><br>

        <button type="submit" name="submit">Register</button><br><br>

    </form>

</div>

<!--Including Footer-->

<style>
    <?php include('../src/css/footer.css'); ?>
</style>
<?php include("../components/footer.php"); ?>

<script src="../src/js/navbarcopy.js"></script>

</html>