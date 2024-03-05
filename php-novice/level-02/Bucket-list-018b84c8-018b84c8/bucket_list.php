<?php

$activiteit = readline("Hoeveel activiteiten wil je toevoegen? ");

if (is_numeric($activiteit)) {
    for ($x = 0; $x < $activiteit; $x++) {
        $juan[] = readline("wat wil je toevoegen: ") . PHP_EOL;
    }

    echo "dit staat op je bucketlist: " . PHP_EOL;

    for ($x = 0; $x < $activiteit; $x++) {
        echo ($juan[$x]);
    }
} else {
    echo "geen geldig getal";
}
