<?php
    if (isset($_COOKIE['licznik_odwiedzin'])) {
        $licznik = $_COOKIE['licznik_odwiedzin'] + 1;
    } else {
        $licznik = 1;
    }
    // Zapisujemy zaktualizowany licznik na 30 dni
    setcookie("licznik_odwiedzin", $licznik, time() + (86400 * 30));
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Licznik Odwiedzin</title>
</head>
<body>
    <?php
        if ($licznik == 1) {
            echo "<h1>Witaj po raz pierwszy na naszej stronie!</h1>";
        } else {
            echo "<h1>Odwiedzasz nas juz po raz $licznik!</h1>";
        }
    ?>
</body>
</html>


