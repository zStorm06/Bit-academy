<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action='<?php echo $_SERVER["PHP_SELF"]; ?>'>
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "$email is een valide E-mail";
        } else {
            echo "E-mail is niet valide";
        }
    }
    ?>

</body>

</html>