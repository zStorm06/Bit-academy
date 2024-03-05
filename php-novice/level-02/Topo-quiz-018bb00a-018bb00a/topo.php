<?php

$landen = array(
    'Japan' => "Tokyo",
    'Mexico' => "Mexico City",
    'USA' => "Washington D.C.",
    'India' => "New Delhi",
    'Zuid-Korea' => "Seoul",
    'China' => "Peking",
    'Nigeria' => "Abuja",
    'Argentina' => "Buenos Aires",
    'Egypt' => "Cairo",
    'UK' => "London"
);

$score = 0;

foreach ($landen as $land => $stad) {
    $antwoord = readline("Wat is de hoofdstad van " . $land . "? ");
    if ($antwoord == $stad) {
        echo "Correct!" . PHP_EOL;
        $score++; 
    } else {
        echo "Helaas, " . $antwoord . " is niet de hoofdstad van " . $land . "." . PHP_EOL;
        echo "Het correcte antwoord is: " . $stad . PHP_EOL;
    }
}

echo "Je hebt " . $score . " van de " . count($landen) . " goed geraden!";
