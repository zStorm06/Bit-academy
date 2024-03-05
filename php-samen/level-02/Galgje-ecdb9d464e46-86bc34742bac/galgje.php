<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    session_start();
    $form = true;

    $woordenarray = array(
        "Time ",
        " Test",
        " Balloon",
        "Words",
        "Behind",
        "Missing",
        "Unlucky",
        " Studying",
        "Gardening ",
        " Pulling",
        "Strongest ",
        " Outlets",
        "Trip ",
        "Beers ",
        " Fries",
        "Cyclists ",
        "Blitzes  ",
        "Tramble",
        "Edge ",
        "Movies ",
        "Christmas ",
        "Markets",
        "Milk",
        "Peacock ",
        "Giraffe",
        "Extraordinary ",
        " Inbetween ",
        " Aftermath",
        " Incense ",
        " Plants ",
        " Printing",
        "Books",
        "Meat",
        "Friction ",
        " Slippery",
        "Narcotics ",
        " Overdue",
        " Apologie",
        " Admire",
        " Inhabitant"
    );

    if (!isset($_SESSION['pagina'])) {
        $_SESSION['pagina'] = "home";
    }

    if (!isset($_GET['action'])) {
        $_SESSION['pagina'] = "home";
    }

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'choice') {
            $_SESSION['pagina'] = "choice";
        }
        if ($_GET['action'] == 'random') {
            $_SESSION['pagina'] = "random";
        }
        if ($_GET['action'] == 'start') {
            $_SESSION['pagina'] = "startspel";
        }
    }

    if ($_SESSION['pagina'] == "home") {
        ?>
        <h1>Hangman</h1>
        <a href="?action=choice" id="home">own word</a>
        <a href="?action=random" id="home">random word</a>

        <?php
    }

    if ($_SESSION['pagina'] == "choice") {
        ?>
        <div class="choice">
            <h1>Hangman</h1>
            <h2>You chose to pick your own word</h2>
            <form method="post" action="">
                <input type="text" name="word_choice" pattern="[a-zA-Z]*">
                <input type="submit" name="submit" value="gebruik dit woord">
            </form>
            <a href="?action=start">start game</a>

        </div>
        <?php
        if (isset($_POST['submit'])) {
            $woord = $_POST['word_choice'];
            if (!isset($_SESSION['woord'])) {
                $_SESSION['woord'] = strtoupper(trim($woord));
            }
        }
    }

    if ($_SESSION['pagina'] == "random") {
        if (!isset($_SESSION['woord'])) {
            $rand = rand(0, count($woordenarray) - 1);
            $woord = $woordenarray[$rand];
            $_SESSION['woord'] = strtoupper(trim($woord));
        }
        ?>

        <h1>Hangman</h1>
        <h2>You chose to use a random word</h2>
        <a href="?action=start">Use this word</a>
        <?php
    }
    if ($_SESSION['pagina'] == "startspel") {
        ?>

        <h1>Hangman</h1>

        <?php

        if (isset($_POST['submit']) && isset($_POST['checkbox'])) {
            if (stripos($_SESSION['woord'], $_POST['checkbox'][0]) === false) {
                array_push($_SESSION['foute_letters'], $_POST['checkbox'][0]);
            } else {
                array_push($_SESSION['juiste_letters'], $_POST['checkbox'][0]);
            }
        }

        if (!isset($_SESSION['foute_letters'])) {
            $_SESSION['foute_letters'] = array();
        }
        if (!isset($_SESSION['juiste_letters'])) {
            $_SESSION['juiste_letters'] = array();
        }

        $show = '';
        for ($i = 0; $i < strlen($_SESSION['woord']); $i++) {
            $show .= in_array(substr($_SESSION['woord'], $i, 1), $_SESSION['juiste_letters']) ? substr($_SESSION['woord'], $i, 1) : "*";
        }

        echo $show;

        if (count($_SESSION['foute_letters']) >= 8) {
            echo '<h1 style="text-decoration:blink">Game over</h1> Het woord was ' . $_SESSION['woord'] . '<br />Over 5 seconden kan je opnieuw spelen.';
            $form = false;
            session_destroy();
            header("Refresh: 5; URL=?action=home");
            exit;
        }

        if ($show == $_SESSION['woord'] && $form == true) {
            echo '<h1 style="text-decoration:blink">! Gefeliciteerd !</h1>Je hebt het goed geraden. Over 5 seconden kan je opnieuw spelen.';
            $form = false;
            session_destroy();
            header("Refresh: 5; URL=?action=home");
            exit;
        }
        ?>



        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
            <?php
            if ($form == true) {
                $letters = range("A", "Z");
                foreach ($letters as $letter) {
                    if (!in_array($letter, $_SESSION['juiste_letters']) && !in_array($letter, $_SESSION['foute_letters'])) {
                        ?>
                        <label for="<?php echo $letter ?>"><?php echo $letter ?></label><input name="checkbox[]" id="<?php echo $letter ?>" type="checkbox" value="<?php echo $letter ?>" />
                        <?php
                    }
                }
                ?>
                <input name="submit" type="submit" value="submit" />
                <?php
            }
            ?>
        </form>

        <?php

        $f[8] = '
    _____
    |/    |
    |     0
    |    /|\
    |     /\
    |
      ______
';
        $f[7] = '
    _____
    |/    |
    |     0
    |    /|\
    | 
    |
      ______
';
        $f[6] = '
    _____
    |/    |
    |     0
    | 
    |  
    |
      ______
';
        $f[5] = '
    _____
    |/    |
    | 
    |
    |
    |
      ______
';
        $f[4] = '
    _____
    |/ 
    |
    |
    |
    |
      ______
';
        $f[3] = '
    _____
    |
    |
    |
    |
    |
      ______
';
        $f[2] = '
 
    |
    |
    |
    |
    |
      ______
';
        $f[1] = '
 
 
 
 
 
 
      ______
';
        $f[0] = '';

        echo '<pre>' . $f[count($_SESSION['foute_letters'])] . '</pre>';
    }
    ?>
</body>