<?php

$servername = 'localhost';
$username = 'amir';
$password = 'Am!r1990@@';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die('<h1>Error: ' . $conn->connect_error . '</h1>');
}

echo 'YESS';
