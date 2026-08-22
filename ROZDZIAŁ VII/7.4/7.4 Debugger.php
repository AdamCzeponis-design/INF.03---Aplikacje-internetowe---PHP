<?php
    $nazwisko = "Depp";
    
    // Szukamy frazy "De" w nazwisku "Depp"
    $pozycja = strpos($nazwisko, "De"); // Funkcja zwraca 0 (poczatek tekstu)

    // Gdzie lezy blad w ponizszym warunku?
    if ($pozycja == false) {
        echo "Brak przedrostka De!";
    } else {
        echo "Nazwisko posiada przedrostek De.";
    }
?>

