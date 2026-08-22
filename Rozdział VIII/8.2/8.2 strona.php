<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona docelowa</title>
</head>
<body>
    <?php
        // Zawsze upewniamy sie, czy parametry istnieja w tablicy $_GET
        if (isset($_GET['lang']) && isset($_GET['param1'])) {
            $jezyk = $_GET['lang'];
            $parametr = $_GET['param1'];

            echo "<h3>Odebrane parametry z adresu URL:</h3>";
            echo "<p>Wybrany jezyk: <strong>" . $jezyk . "</strong></p>";
            echo "<p>Wartosc param1: <strong>" . $parametr . "</strong></p>";

            // Prosta logika na podstawie odebranych parametrow
            if ($jezyk == 'pl') {
                echo "<p>Witaj na naszej stronie!</p>";
            } else {
                echo "<p>Welcome to our website!</p>";
            }
        } else {
            echo "<p>Brak parametrow w adresie URL! Kliknij link w menu.</p>";
        }
    ?>
</body>
</html>
