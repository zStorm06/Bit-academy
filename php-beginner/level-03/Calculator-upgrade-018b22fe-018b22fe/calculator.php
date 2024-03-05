<?php

$operatie = readline("welke operatie wil je uitvoeren? (+, -, %) ");

if ($operatie == "+" || $operatie == "-" || $operatie == "%") {
    $getal1 = readline("eerste getal: ");
    if (is_numeric($getal1)) {
        $getal2 = readline("tweede getal: ");
        if (is_numeric($getal2)) {
            if ($operatie == "+") {
                $uitkomst = $getal1 + $getal2;
                echo "Uw resultaat is: " . $uitkomst;
            } elseif ($operatie == "-") {
                $uitkomst = $getal1 - $getal2;
                echo "Uw resultaat is: " . $uitkomst;
            } else {
                $uitkomst = $getal1 % $getal2;
                echo "Uw resultaat is: " . $uitkomst;
            }
        } else {
            echo $getal2 . " is geen getal";
        }
    } else {
        echo $getal1 . " is geen getal";
    }
} else {
    echo "geen geldige operatie";
}