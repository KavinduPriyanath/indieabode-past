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
        <!--register form-->

        <div class="full-name">
            <input type="text" name="firstname" id="firstname" placeholder="firstname" required/><br>
            <input type="text" name="lastname" id="lastname" placeholder="lastname" required/><br>
        </div>
        <input type="text" name="username" id="username" placeholder="username" required/><br>
        <p>Pattern: 4-50 length, only alphanumeric or -_chars</p><br>

        <input type="text" name="name" id="name" placeholder="Name" required/><br><br>
        <input type="email" name="email" id="title" placeholder="email" required/><br><br>
        <input type="password" name="password" id="password" placeholder="Password" required/><br><br>
        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required/>
        <div class="about-you">
            <p><b>About You</b></p>
            <input type="checkbox" name="" id="" value="">
            <label for="">I'm interested in playing and downloading games</label><br>
            <input type="checkbox" name="" id="" value="">
            <label for="">I'm interested in distributing content</label>
            <p>You can change your responses to these questions later, they are used to hint itch.io in how it should present itself to you.</p>
        </div>

        <input type="checkbox" name="" id="" value="">
        <label for="">I accept the terms of service </label>

    </form>
    <button>Register</button>
  </div>


</body>
</html>
