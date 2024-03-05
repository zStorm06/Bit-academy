<?php

$geld = intval($argv[1]);

if ($geld >= 10) {
    echo (floor($geld / 10) . " x 10 euro") . PHP_EOL;
    $geld = $geld % 10;
}
if ($geld >= 5) {
    echo (floor($geld / 5) . " x 5 euro") . PHP_EOL;
    $geld = $geld % 5;
}
if ($geld >= 2) {
    echo (floor($geld / 2) . " x 2 euro") . PHP_EOL;
    $geld = $geld % 2;
}
if ($geld > 0) {
    echo ($geld . " x 1 euro") . PHP_EOL;
} else {
    echo "Geen wisselgeld";
}