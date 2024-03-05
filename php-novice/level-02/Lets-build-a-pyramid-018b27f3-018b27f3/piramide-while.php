<?php

$n = readline("Hoeveel stapels wil je hebben?: ");
$i = 1;

while ($i <= $n) {
    $j = 1;
    while ($j <= ($n - $i)) {
        echo "";
        $j++;
    }

    $k = 2;
    while ($k <= ($i + 1)) {
        echo "* ";
        $k++;
    }

    echo PHP_EOL;
    $i++;
}
