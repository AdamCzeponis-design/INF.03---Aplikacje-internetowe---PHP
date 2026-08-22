<?php
    $imiona = ["Adam", "Ewa", "Marek"];

    // Sposob 1: Pobieramy tylko wartosci
    foreach ($imiona as $imie) {
        echo "Imie: $imie <br>";
    }

    echo "---<br>";

    $ceny = ["Chleb" => 5.50, "Mleko" => 4.00];

    // Sposob 2: Pobieramy zarpwno KLUCZ, jak i WARTOSC
    foreach ($ceny as $produkt => $cena) {
        echo "Produkt: $produkt kosztuje $cena zł<br>";
    }
?>

