<?php
    // Flaga od razu usuwa ukryte entery!
    $tablica_punktow = file("punkty.txt", FILE_IGNORE_NEW_LINES);
    $suma = 0;

    foreach ($tablica_punktow as $punkt) {
        echo "Zdobyto: " . $punkt . " pkt<br>";
        $suma += $punkt; // Dodawanie wartosci
    }

    echo "Suma calkowita: " . $suma;
?>

