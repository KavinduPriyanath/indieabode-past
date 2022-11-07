<?php session_start();

require '../db/database.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //check with db
    $sql = "SELECT * FROM gamer WHERE email = '$email' AND password = '$password'";
    $user = mysqli_query($conn, $sql) or die("Couldn't proceed");

    $row = mysqli_fetch_assoc($user);

    if (is_array($row) && !empty($row)) {
        $_SESSION['valid'] = $row['username'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['gamerID'];
    } else {
        echo "Invalid Username or password";
    }

    if (isset($_SESSION['valid'])) {
        header('Location: ../index.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
        <form action="#" method="POST">
            <input type="email" placeholder="email" name="email">
            <input type="password" placeholder="Password" name="password">

            <button type="submit" name="submit">Login</button>

        </form>


        <div class="forgot-pw">
            Forgot Password? <br><a href="/indieabode/pages/resetpassword.php">Reset Password</a>
        </div>
    </div>
</body>

</html>