<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Validate</title>

    <style>
        html {
            height: 100%;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            height: 100%;
            background: #eee;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">

        <form action="" method="POST">

            <label>
                Name:
                <input type="text" name="first_name">
            </label>
            <br>
            <label>
                Email:
                <input type="text" name="email">
            </label>
            <br>
            <label>
                Age:
                <input type="number" name="age">
            </label>
            <br>

            <button>Save</button>
        </form>

    </div>
</body>

</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emaiError = $nameError = $ageError = false;

    $email = test_input($_POST['email']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'mail is ok';
    } else {
        echo 'Error in Email address!';
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>