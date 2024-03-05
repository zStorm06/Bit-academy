<?php
session_start();

// Array van mogelijke keuzes
$choices = array("steen", "papier", "schaar");

// Functie om de keuze van de computer te bepalen
function getComputerChoice($choices)
{
    $index = array_rand($choices);
    return $choices[$index];
}

// Functie om het resultaat van het spel te bepalen
function determineWinner($player, $computer)
{
    if ($player == $computer) {
        return "Gelijkspel!";
    } elseif (
        ($player == "steen" && $computer == "schaar") ||
        ($player == "schaar" && $computer == "papier") ||
        ($player == "papier" && $computer == "steen")
    ) {
        return "Gefeliciteerd, je hebt gewonnen!";
    } else {
        return "Helaas, je hebt verloren.";
    }
}

// Verwerk de keuze van de gebruiker
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["player_choice"])) {
    $playerChoice = $_POST["player_choice"];
    $computerChoice = getComputerChoice($choices);
    $result = determineWinner($playerChoice, $computerChoice);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Steen, Papier, Schaar - Game</title>
</head>

<body>
    <h1>Steen, Papier, Schaar - Tegen de computer</h1>
    <h2>Kies je zet:</h2>
    <form action="" method="post">
        <input type="submit" name="player_choice" value="Steen">
        <input type="submit" name="player_choice" value="Papier">
        <input type="submit" name="player_choice" value="Schaar"><br>
    </form>

    <?php if (isset($result)) : ?>
        <h2>Resultaat:</h2>
        <p>Jij koos: <?php echo $playerChoice; ?></p>
        <p>De computer koos: <?php echo $computerChoice; ?></p>
        <p><?php echo $result; ?></p>
    <?php endif; ?>

    <a href="index.php">Home</a> <br>
</body>

</html>