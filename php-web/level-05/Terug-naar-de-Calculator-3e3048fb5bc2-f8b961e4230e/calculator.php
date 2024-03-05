<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Calculator</h1>
        <label for="nummer1">Nummer 1:</label>
        <input type="text" id="nummer1" name="nummer1"><br>
        <label for="nummer2">Nummer 2:</label>
        <input type="text" id="nummer2" name="nummer2"><br>
        <label for="operator">Operator:</label>
        <select id="operator" name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="modulo">%</option>
        </select><br>
        <input type="submit" value="Calculate">

        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nummer1 = $_POST['nummer1'];
            $nummer2 = $_POST['nummer2'];
            if (!is_numeric($nummer1) || !is_numeric($nummer2)) {
                echo "heb geldig getal nodig man >:(";
            } else {
                $operator = $_POST['operator'];

                if (($operator === 'divide' || $operator === 'modulo') && $nummer2 == 0) {
                    echo "geen 0 voor tweede getal ;-;";
                } else {
                    switch ($operator) {
                        case 'add':
                            $resultaat = $nummer1 + $nummer2;
                            break;
                        case 'subtract':
                            $resultaat = $nummer1 - $nummer2;
                            break;
                        case 'multiply':
                            $resultaat = $nummer1 * $nummer2;
                            break;
                        case 'divide':
                            $resultaat = $nummer1 / $nummer2;
                            break;
                        case 'modulo':
                            $resultaat = round($nummer1, $nummer2);
                            break;
                        default:
                            echo "Ongeldige";
                            break;
                    }

                    echo "Resultaat: $resultaat";
                }
            }
        }

        ?>
</body>

</html>