<?php

$conn = mysqli_connect('localhost', 'root', '', 'indieabode');

if (!$conn) {
    echo "Couldn't connect" . mysqli_connect_error();
}
