<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new product</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="post">
        <label for="">
            Title:
            <input type="text" name="title">
        </label>

        <br><br>

        <label for="">
            Price:
            <input type="number" name="price">
        </label>

        <br><br>

        <label for="">
            Date:
            <input type="date" name="date">
        </label>

        <br><br>

        <button>Save</button>
    </form>
</body>

</html>

<?php

if ($_POST) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $date = $_POST['date'];

    require "config.php";

    $sql = "INSERT INTO products (title, price, date) VALUES ('$title', '$price', '$date')";
    $result = mysqli_query($conn, $sql);

    var_dump($result);
}

?>