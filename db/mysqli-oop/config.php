<?php

# Connect to DB by OOP mysqli
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("DB ERROR: " . $conn->connect_error);
}

echo "Connect to DB by OOP mysqli Successfully!";

# Select DB name
mysqli_select_db($conn, "php1");
