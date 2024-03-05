<?php

echo "Wie zit er in de klas?" . PHP_EOL;
$juan = readline();
$exp = explode(" ", $juan);
echo "de mensen van de klas zijn:" . PHP_EOL;
foreach ($exp as $frits) {
    echo ($frits) . PHP_EOL;
}