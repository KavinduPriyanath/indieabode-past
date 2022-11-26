<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">


<!--Including Navbar-->
<?php include("includes/loginnavbar.php"); ?>
<style>
    <?php include 'public/css/login.css'; ?>
</style>


<div class="wrapper">
    <div class="btn-box">
        <a href="/indieabode/pages/login.php"><button type="button" class="toggle-btn login-toggle-btn">Login</button></a>
        <a href="/indieabode/pages/register.php"><button type="button" class="toggle-btn">Register</button></a>
    </div>
    <form action="#" method="POST" id="form">
        <label class="form-login-label" id="username">Email or Username</label><br>
        <input type="text" placeholder="email" name="email"><br>
        <label class="form-login-label">Password</label><br>
        <input type="password" placeholder="Password" name="password"><br>

        <!-- checkbox -->
        <div class="check-bar">
            <label for="robot" id="robotlabel">
                <input type="checkbox" name="robot" id="robot" onclick="checkboxClicked()"> I'm not a Robot
            </label>
        </div>
        <!-- checkbox closed -->


        <!-- Add Recaptcha -->
        <div class="captcha" id="captcha">
            <!-- <label for="captcha-input"> Enter Captcha</label> -->
            <div class="preview"><span></span></div>
            <div class="captcha-form">
                <input type="text" id="captcha-input" placeholder="Enter Captcha Text" />
                <button class="captcha-refresh"><i class="fa fa-refresh"></i></button>
            </div>
            <div class="status-text"></div>
        </div>
        <!-- End of Recaptcha -->


        <button type="submit" name="submit" id="login">Login</button>



    </form>
    <div class="forgot-pw">
        <div> Forgot Password? </div><a href="/indieabode/pages/resetpassword.php">Reset Password</a>
    </div>
</div>

<script>
    <?php include('public/js/captcha.js'); ?>
</script>


<!--Including Footer-->

<style>
    <?php include('public/css/footer.css'); ?>
</style>
<?php include("includes/footer.php"); ?>

</html>