<?php

$servername = 'localhost';
$username = 'amir';
$password = 'Am!r1990@@';

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die('Error: ' . mysqli_connect_error());
}

echo 'Connected';
