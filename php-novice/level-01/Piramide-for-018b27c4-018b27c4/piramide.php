<?php

$piramide = readline("Hoeveel stapels wil je hebben? ");

for ($colum = 0; $colum < $piramide; $colum++) { 
    for ($row = 0; $row <= $colum; $row++) { 
        echo "* ";
    }
    echo PHP_EOL;
}