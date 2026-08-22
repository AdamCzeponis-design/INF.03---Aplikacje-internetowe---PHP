<?php
    // --- PRZYKLAD 1: Formatowanie wielkosci liter ---
    $brudne_dane = "jAn kOwaLsKi";

    // 1. Zamieniamy calosc na male litery
    $male = strtolower($brudne_dane); // "jan kowalski"

    // 2. Ustawiamy wielkie litery na poczatku kazdego slowa
    $czyste_dane = ucwords($male); // "Jan Kowalski"

    echo "Przed: " . $brudne_dane . "<br>";
    echo "Po: " . $czyste_dane . "<br><br>";


    // --- PRZYKLAD 2: Badanie dlugosci (Polskie ogonki) ---
    $slowo_pl = "Lodz"; // 4 litery

    echo "Dlugosc strlen(): " . strlen($slowo_pl) . " bajtow<br>"; // Zwroci 7!
    echo "Dlugosc mb_strlen(): " . mb_strlen($slowo_pl, "UTF-8") . " znakow<br><br>"; // Zwroci 4 (poprawnie)


    // --- PRZYKLAD 3: Petla przez wszystkie litery w tekscie ---
    $jezyk = "PHP2026";
    $dlugosc = strlen($jezyk); // 7 znakow (indeksy od 0 do 6)

    echo "Rozbicie slowa na znaki:<br>";
    
    // Petla musi miec warunek $i < $dlugosc (BEZ znaku rownosci <=)
    for ($i = 0; $i < $dlugosc; $i++) {
        echo "Pozycja [" . $i . "]: " . $jezyk[$i] . "<br>";
    }
?>