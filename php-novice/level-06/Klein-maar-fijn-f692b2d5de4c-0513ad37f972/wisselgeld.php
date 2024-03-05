<?php

$change = (float)$argv[1];

define(
    "EUROS",
    [
        50 => "euro",
        20 => "euro",
        10 => "euro",
        5 => "euro",
        2 => "euro",
        1 => "euro"
    ]
);

define(
    "CENTEN",
    [
        50 => "cent",
        20 => "cent",
        10 => "cent",
        5 => "cent"
    ]
);

$resteuros = floor($change);
$restcenten = ($change - $resteuros) * 100;



foreach (EUROS as $stacks => $type1) {
    $resteuros = round($resteuros, 2);
    if (floor($resteuros / $stacks) > 0) {
        $times =  floor($resteuros / $stacks);
        echo "$times x $stacks euro" . PHP_EOL;
        $resteuros = $resteuros % $stacks;
    }
}

foreach (CENTEN as $cent => $type2) {
    $restcenten = round($restcenten, 2);
    if (floor($restcenten / $cent) > 0) {
        $times =  floor($restcenten / $cent);
        echo "$times x $cent cent" . PHP_EOL;
        $restcenten = $restcenten % $cent;
    } else {
        echo "geen wisselgeld ";
    }
}
