<?php

$list = array();

$product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
array_push($list, $product);

function boodschappen($a)
{
    echo "Je boodschappen lijstje bevat nu:" . PHP_EOL;
    foreach ($a as $value) {
        echo $value . PHP_EOL;
    }
}

echo "Je boodschappen lijstje bevat nu:" . PHP_EOL;
foreach ($list as $value) {
    echo $value . PHP_EOL;
}
// Deze echo moet in het midden blijven staan
echo "Bedankt voor het gebruik van de boodschappenlijst!" . PHP_EOL;

while (strtolower(substr(trim(readline("Wil je meer producten toevoegen? (y/n)")), 0, 1)) === 'y') {
    $product = readline("Wat wil je aan je boodschappenlijst toevoegen?");
    array_push($list, $product);

    echo boodschappen($list);
}