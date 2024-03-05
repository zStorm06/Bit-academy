<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function inverse($x)
    {
        if ($x != 1) {
            throw new Exception('ERROR');
        }
        return $x;
    }

    try {
        echo inverse(5) . PHP_EOL;
    } catch (Exception $e) {
        echo  $e->getMessage() . PHP_EOL;
        exit;
    }

    echo "Hello World" . PHP_EOL;
    ?>
</body>

</html>