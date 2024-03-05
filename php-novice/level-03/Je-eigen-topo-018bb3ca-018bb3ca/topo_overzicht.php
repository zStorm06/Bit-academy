<?php

$arr = array();
$aantal = readline("Hoveel landen ga je toevoegen: ");

if (is_numeric($aantal)) {
    for ($x = 0; $x < $aantal; $x++) {
        $land = readline("Welk land wil je toevoegen? ") . PHP_EOL;
        $stad = readline("Wat is de hoofdstad? ") . PHP_EOL;
        $arr += array($land => $stad);
    }
    foreach ($arr as $land => $value) {
        echo  "$land $stad" . PHP_EOL;
    }
} else {
    echo ("je hebt geen nummer toegevoegd");
}
