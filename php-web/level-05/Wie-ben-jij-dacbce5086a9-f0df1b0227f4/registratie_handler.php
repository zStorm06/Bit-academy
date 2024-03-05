<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $leeftijd = $_POST['leeftijd'];
    ?>
    <p>Jouw naam is: <?= $naam ?> 
    <p>Jouw email is: <?= $email ?>
    <p>Jouw leeftijd is: <?= $leeftijd ?>
</body>

</html>