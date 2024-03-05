<?php

$geld = intval($argv[1]);
if ($argv[1] > 0) {
    echo "$geld x 1 euro";
} else {
    echo "Geen wisselgeld...";
}
