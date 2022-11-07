<?php

$conn = mysqli_connect('localhost', 'kavindu', '1234', 'indieabode');

if (!$conn) {
    echo "Couldn't connect" . mysqli_connect_error();
}
