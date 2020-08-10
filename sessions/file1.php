<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <?php
    $_SESSION['favorite_color'] = 'Orange';
    $_SESSION['favorite_animale'] = 'Cat';
    echo 'Sesscions has created!';
    ?>
</body>

</html>