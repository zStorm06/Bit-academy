<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $countdown = $_POST['Text'];

        try {
            if ($countdown < 0) {
                throw new exception(" foutmelding");
            } elseif ($countdown > 10) {
                throw new exception(" foutmelding");
            } else {
                echo $countdown;
            }
        } catch (exception $e) {
            echo "Er is iets fout gegaan....";
        }
    }
    ?>
</body>

</html>