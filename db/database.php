<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "indieabode";


$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    echo "Couldn't connect" . mysqli_connect_error();
}
