<?php

$rest = substr($argv[1], -1);

if ($rest == "d") {
    echo $argv[1] * 86400;
}

if ($rest == "u") {
    echo $argv[1] * 3600;
}

if ($rest == "m") {
    echo $argv[1] * 60;
}

if ($rest == "s") {
    echo $argv[1] * 1;
}

