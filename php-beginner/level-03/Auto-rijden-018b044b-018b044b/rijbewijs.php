<?php

echo 'hoe oud ben je' . PHP_EOL;
$leeftijd = readline();

if ($leeftijd >= 16.5){
    echo "Je mag autorijden!";
} else
    echo "Je mag helaas niet autorijden";
?>