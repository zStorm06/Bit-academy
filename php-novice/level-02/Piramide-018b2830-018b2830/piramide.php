<?php

$a = readline("Hoeveel stapels wil je hebben?: ");
$x1 = "*";
$x = 1;


while ($x <= $a) {
    echo $x1 . "\n";
    $x1 .= "*";
    $x++;
}

