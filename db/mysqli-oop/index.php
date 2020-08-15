<?php

require 'config.php';

$sql = 'SELECT * FROM products';
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli OOP</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>
        List of products
        <a href="/add.php" class="btn btn-add">Add new</a>
    </h1>

    <hr>

    <div class="wrapper">
        <?php
        foreach ($result as $item) {
            echo "<div>";
            echo "<h3>" . ucfirst($item['title']) . "</h3>";
            echo "<h5>Price: " . number_format($item['price'], 0, '.', ',') . "</h5>";
            echo "<p>Date: " . $item['date'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>