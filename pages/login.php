<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
    <?php
         include('../src/css/login.css'); 
    ?>
</style>


    <div class="wrapper">
        <div class="btn-box">
            <button type="button" class="toggle-btn"><a href="/indieabode/pages/login.php">Login</a></button>
            <button type="button" class="toggle-btn"><a href="/indieabode/pages/register.php">Register</a></button>
        </div>
        <form>
        <input type="email" placeholder="email">
        <input type="password" placeholder="Password">

        </form>
        <button>Login</button>

        <div class="forgot-pw">
        Forgot Password? <br><a href="#">Reset Password</a>
        </div>
    </div>
</body>
</html>


