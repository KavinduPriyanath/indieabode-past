<?php session_start();

require '../db/database.php';

$error_msg = null;


if (isset($_POST['submitL'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   
   $user_matched = false;


   $sql = "SELECT * FROM gamer WHERE email = '$email'";
   $user = mysqli_query($conn, $sql) or die("Couldn't proceed");

   $row = mysqli_fetch_assoc($user);

   if (empty($row)) {
       $error_msg = "Invalid Username or Email";
   } else if ($password == null) {
       $error_msg = "Empty password";
   } else if ($password != $row['password']) {
       $error_msg = "Invalid password";
   } else {
       $user_matched = true;
   }


   if (is_array($row) && $user_matched) {
       $_SESSION['valid'] = $row['username'];
       $_SESSION['username'] = $row['username'];
       $_SESSION['id'] = $row['gamerID'];
       header('Location: ../index.php');
   }
}



if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //insert into db
    $sql = "INSERT INTO gamer(firstName, lastName, username, email, password) VALUES ('$fname', '$lname', '$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        header('Location: yeshlogin.php');
    } else {
        echo "error";
    }
   
}

?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
    <!--Including Navbar-->
<style>
    <?php
    include('../src/css/yeshlogin.css');
    ?>
</style>
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="yeshlogin.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               INDIE ABODE
            </div>
            <div class="title register">
               INDIE ABODE
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="register">
               <label for="login" class="slide login">Login</label>
               <label for="register" class="slide register">Register</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="#" class="login" method="POST">
                  <div class="field">
                     <input type="text" id="username" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="/indieabode/pages/resetpassword.php">Forgot password?</a>
                  </div>

                  <?php if ($error_msg != null) { ?>
                     <div class="errors-display" id="errors">
                        <?php echo $error_msg; ?>
                     </div>
                  <?php } ?>



                  <div class="field btn">
                     <button type="submitL" name="submitL">Login</button>
                  </div>
                  <div class="register-link">
                     Not a member? <a href="">register now</a>
                  </div>
               </form>
               <form action="#" method="POST">
                    <div class="field">
                        <input type="text" name="firstname" id="firstname" placeholder="Firstname" required>
                    </div>
                    <div class="field">
                        <input type="text" name="lastname" id="lastname" placeholder="Lastname" required>
                    </div>
                    <div class="field">
                        <input type="text" name="username" id="username" placeholder="Username" required>
                    </div>
                    <div class="field">
                        <input type="text" name="email" id="email" placeholder="Email Address" required>
                     </div>
                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" name="conpassword" id="conpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="field btn">
                        <button type="submit" name="submit">Register</button>
                    </div>
                    <?php
                    
                     if (isset($_POST['submit'])) {
                        $fname = $_POST['firstname'];
                        $lname = $_POST['lastname'];
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        //insert into db
                        $sql = "INSERT INTO gamer(firstName, lastName, username, email, password) VALUES ('$fname', '$lname', '$username', '$email', '$password')";

                        if (mysqli_query($conn, $sql)) {
                           header('Location: yeshlogin.php');
                        } else {
                           echo "error";
                        }
                        
                     }

                     ?>
               </form>
            </div>
         </div>
      </div>
      
   </body>
   <style>
    <?php include('../src/css/footer.css'); ?>
   </style>
   <?php include("../components/footer.php"); ?>
   <script src="../src/js/yeshlogin.js"></script>
</html>

