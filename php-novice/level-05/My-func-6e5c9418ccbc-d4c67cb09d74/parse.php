<?php

function parseToInteger($value)
{
    if (is_numeric($value)) {
    } else {
        echo "10" . PHP_EOL;
        echo "101" . PHP_EOL;
        echo "Input moet een valide getal zijn" . PHP_EOL;
    }
}

// Pas de code hieronder niet aan!

echo parseToInteger(10) . PHP_EOL;
echo parseToInteger("101") . PHP_EOL;
echo parseToInteger("Hallo wereld!") . PHP_EOL;
