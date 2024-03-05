<?php

$totaal = "0";
$prijslijst = array("Citizen of Glass" => "4.50", "Night" => "9", "New Eyes" => "5", "Strange Trails" => "10");
$getal = count($prijslijst);

echo ("het albumoverzicht:" . PHP_EOL);

foreach ($prijslijst as $prijs => $var) {
    echo ("$prijs kost €$var" . PHP_EOL);
    $totaal = $totaal + $var;
}

echo ("de totaal prijs is €$totaal"      . PHP_EOL);
echo ("het gemiddelde is €" . ($totaal / $getal));
