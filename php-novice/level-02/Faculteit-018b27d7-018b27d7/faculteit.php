<?php

$getal = readline("Van welk getal wil je de faculteit weten? ");
$resultaat = 1;

for ($i = 1; $i < $getal; $i++) { 
    $resultaat *= ($i + 1);
}
echo "De faculteit van $getal is $resultaat";