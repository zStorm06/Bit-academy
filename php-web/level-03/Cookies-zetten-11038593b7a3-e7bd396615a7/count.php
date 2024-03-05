<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>

<body>
    <p>
        Je hebt deze pagina
        <?php
        if (isset($_COOKIE["bezoekjes"])) {
            $aantal = $_COOKIE["bezoekjes"] + 1;
        } else {
            $aantal = 1;
        }
        echo $aantal;
        setcookie("bezoekjes", $aantal, time() + 24 * 3600);
        ?>
        keer bezocht!
    </p>
</body>

</html>