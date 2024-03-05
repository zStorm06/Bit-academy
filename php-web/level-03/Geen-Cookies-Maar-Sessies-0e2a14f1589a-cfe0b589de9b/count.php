<?php
session_start();

?>
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
        if (isset($_SESSION["bezoekjes"])) {
            $aantal = $_SESSION["bezoekjes"] + 1;

            echo $aantal;
            $_SESSION["bezoekjes"] = $aantal;        
        } else {
            echo 0;
            $_SESSION["bezoekjes"] = 0;
        }
        ?>
        keer bezocht!
    </p>
</body>

</html>