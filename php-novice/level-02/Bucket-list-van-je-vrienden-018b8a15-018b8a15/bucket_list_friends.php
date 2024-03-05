<?php

$arr = array();
echo "Hoeveel vrienden willen een droom toevoegen?" . PHP_EOL;
$input = readline();
if (is_numeric($input)) {
    for ($x = 0; $x < $input; $x++) {
        echo "Hoe heet je?" . PHP_EOL;
        $name = readline();
        echo "Wat is je droom?" . PHP_EOL;
        $dream = readline();
        $arr[$name] = $dream;
    }
    foreach ($arr as $name => $dream) {
        echo "> De droom van $name is: $dream" . PHP_EOL;
    }
} else { 
    echo "geen geldig getal";
}