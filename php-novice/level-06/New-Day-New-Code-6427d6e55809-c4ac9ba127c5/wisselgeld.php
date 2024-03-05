<?php

$input = $argv[1];
$bedrag = intval($input);

define(
    "MONEY_UNITS",
    [
        50,
        20,
        10,
        5,
        2,
        1
    ]
);

$restbedrag = $bedrag;

foreach (MONEY_UNITS as $stacks) {
    if ($restbedrag >= $stacks) {
        $restgeld = floor($restbedrag / $stacks);
        $restbedrag = $restbedrag % $stacks;
        print($restgeld . " x " . $stacks . " euro " . PHP_EOL);
    } else {
        echo "geen wisselgeld";
    }
}
