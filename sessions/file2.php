<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Sessions</title>
</head>

<body>
    <?php
    echo '<h2>My Favorite Color is ' . $_SESSION['favorite_color'] . '</h2><br/>';
    echo '<h2>My Favorite Animal is ' . $_SESSION['favorite_animale'] . '</h2><br/>';

    ?>
</body>

</html>