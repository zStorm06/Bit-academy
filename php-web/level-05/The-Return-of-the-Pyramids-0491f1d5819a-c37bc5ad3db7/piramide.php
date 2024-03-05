<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="300px" cellspacing="0px" cellpadding="0px">

        <?php
        for ($row = 1; $row <= 10; $row++) {
            for ($zwart = 1; $zwart <= $row; $zwart++) {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>