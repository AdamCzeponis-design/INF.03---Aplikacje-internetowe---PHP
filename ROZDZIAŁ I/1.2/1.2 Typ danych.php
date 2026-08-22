<?php
    $tekst = "INF.03";
    $liczba = 2026;

    echo gettype($tekst) . "<br>"; // Wyswietli: string
    echo gettype($liczba) . "<br>"; // Wyswietli: integer
    
    echo "Czy to tekst? Wynik: " . is_string($tekst); // Wyswietli: Czy to tekst? Wynik: 1
?>

