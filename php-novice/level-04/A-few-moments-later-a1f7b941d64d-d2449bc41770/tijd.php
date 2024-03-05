<?php

if (empty($argv[1])) {
    echo "Foutmelding";
} else {
    $totaal = 0;
    for ($i = 1; $i < count($argv); $i++) {
        $aantal = substr($argv[$i], 0, -1);
        $dums = substr($argv[$i], -1);
        switch ($dums) {
            case 'd':
                $tijd = $aantal * 86400;
                $totaal = $totaal + $tijd;
                break;
            case 'u':
                $tijd = $aantal * 3600;
                $totaal = $totaal + $tijd;
                break;
            case 'm':
                $tijd = $aantal * 60;
                $totaal = $totaal + $tijd;
                break;
            case 's':
                $tijd = $aantal;
                $totaal = $totaal + $tijd;
                break;
            default:
                echo "foutmelding";
                break;
        }
    }
    echo 'de totale tijd is ' . $totaal . ' seconden';
}
