<?php

$operatie = readline("welke operatie wil je uitvoeren? (+, -) ");
$getal1 = readline("eerste getal? ");
$getal2 = readline("tweede getal? ");

if ($operatie == "+") {
    $uitkomst = $getal1 + $getal2;
    echo "je uitkomst: " . $uitkomst;
} else {
    $uitkomst = $getal1 - $getal2;
    echo "je uitkomst: " . $uitkomst;
}

