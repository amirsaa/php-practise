<?php
$emaiError = $nameError = $ageError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $age = test_input($_POST['age']);

    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameError = "Only letters and white space allowed";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emaiError = 'Email not invalid';
    }

    if (!preg_match("/^[0-9]*$/", $age)) {
        $ageError = 'Age is not valid.';
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

        label {
            display: block;
            margin-bottom: 1rem;
        }


        input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
        }

        span {
            display: block;
            font-size: 12px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">

        <form action="" method="POST">

            <label>
                Name:
                <input type="text" name="name" <?php if ($nameError) echo 'style="border-color: red"' ?>>
                <span><?php echo $nameError; ?></span>
            </label>

            <label>
                Email:
                <input type="text" name="email" <?php if ($emaiError) echo 'style="border-color: red"' ?>>
                <span><?php echo $emaiError; ?></span>
            </label>

            <label>
                Age:
                <input type="number" name="age" <?php if ($ageError) echo 'style="border-color: red"' ?>>
                <span><?php echo $ageError; ?></span>
            </label>


            <button>Save</button>
        </form>

    </div>
</body>

</html>