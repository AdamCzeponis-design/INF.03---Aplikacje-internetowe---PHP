<?php
    // --- PRZYKLAD 1: Wiele argumentow ---
    
    // Funkcja wymaga podania dokladnie dwoch argumentow
    function powitanie($imie, $nazwisko) {
        echo "Witaj, " . $imie . " " . $nazwisko . "!<br>";
    }

    powitanie("Jan", "Kowalski"); 
    // powitanie("Anna"); // TO WYGENERUJE BLAD (brakuje drugiego argumentu!)


    // --- PRZYKLAD 2: Wartosci domyslne ---
    
    // Argument $kolor jest opcjonalny. Jesli go nie podasz, przyjmie wartosc "czarny"
    function rysujPrzycisk($etykieta, $kolor = "czarny") {
        echo "Rysuje przycisk [" . $etykieta . "] w kolorze: " . $kolor . "<br>";
    }

    rysujPrzycisk("Zapisz", "czerwony"); // Podajemy oba (etykieta: Zapisz, kolor: czerwony)
    rysujPrzycisk("Anuluj");             // Podajemy jeden (etykieta: Anuluj, kolor: czarny)
?>

