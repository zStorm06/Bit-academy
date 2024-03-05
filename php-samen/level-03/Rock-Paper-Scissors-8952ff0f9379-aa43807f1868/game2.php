<?php

session_start();

// Controleer of er een keuze is gemaakt door speler 1
if (isset($_POST["choice_p1"])) {
    $_SESSION["choice_p1"] = $_POST["choice_p1"];
    header('Location: game2.php'); // Herlaad de pagina voor speler 2
    exit();
}

// Controleer of beide spelers hun keuzes hebben gemaakt
if (isset($_SESSION["choice_p1"]) && isset($_POST["choice_p2"])) {
    $choice_p1 = $_SESSION["choice_p1"];
    $choice_p2 = $_POST["choice_p2"];

    // Bepaal de winnaar
    $result = determineWinner($choice_p1, $choice_p2);

    // Toon de resultaten
    echo "<h1>Steen, Papier, Schaar - Tegen een andere speler</h1>";
    echo "<p>Speler 1 koos: $choice_p1</p>";
    echo "<p>Speler 2 koos: $choice_p2</p>";
    echo "<h2>Resultaat: $result</h2>";

    // Verwijder de sessievariabele voor de keuze van speler 1 om een nieuw spel te starten
    unset($_SESSION["choice_p1"]);
} else {
    // Toon formulier voor speler 1
    echo "<h1>Steen, Papier, Schaar - Tegen een andere speler</h1>";
    echo "<h2>Speler 1: Kies je zet</h2>";
    echo "<form method='post'>";
    echo "<input type='submit' name='choice_p1' value='steen'>";
    echo "<input type='submit' name='choice_p1' value='papier'>";
    echo "<input type='submit' name='choice_p1' value='schaar'>";
    echo "</form>";

    // Formulier voor speler 2 (verborgen totdat speler 1 zijn keuze heeft gemaakt)
    if (isset($_SESSION["choice_p1"])) {
        echo "<h2>Speler 2: Kies je zet</h2>";
        echo "<form method='post'>";
        echo "<input type='submit' name='choice_p2' value='steen'>";
        echo "<input type='submit' name='choice_p2' value='papier'>";
        echo "<input type='submit' name='choice_p2' value='schaar'>";
        echo "</form>";
    }
}

// Functie om de winnaar te bepalen
function determineWinner($choice_p1, $choice_p2) {
    if ($choice_p1 == $choice_p2) {
        return "Gelijkspel";
    } elseif (($choice_p1 == "steen" && $choice_p2 == "schaar") ||
              ($choice_p1 == "papier" && $choice_p2 == "steen") ||
              ($choice_p1 == "schaar" && $choice_p2 == "papier")) {
        return "Speler 1 wint";
    } else {
        return "Speler 2 wint";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>