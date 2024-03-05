<?php

$arr = array();
echo "Hoeveel vrienden willen een droom toevoegen?" . PHP_EOL;
$input = readline();
if (is_numeric($input)) {
    for ($x = 0; $x < $input; $x++) {
        echo "Wat is jouw naam?" . PHP_EOL;
        $name = readline("");
        echo "Hoeveel dromen ga je opgeven?" . PHP_EOL;
        $hvl = readline("");

        for ($i = 0; $i < $hvl; $i++) {
            echo "Wat is jouw droom?" . PHP_EOL;
            $dream = readline("");
            $arr[] = array($name, $dream);
        }
    }
    foreach ($arr as $oei) {
        echo $oei[0] . " heeft dit als droom: " . $oei[1] . PHP_EOL;
    }
} else {
    echo "geen geldig getal";
}
