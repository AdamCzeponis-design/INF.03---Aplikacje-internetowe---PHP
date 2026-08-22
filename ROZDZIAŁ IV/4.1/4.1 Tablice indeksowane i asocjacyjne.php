<?php
    // 1. Tablica indeksowana (numerycznie)
    $owoce = ["Jablko", "Banan", "Pomarancza"];
    // Indeksy:    0          1           2

    echo $owoce[0] . "<br>"; // Wyswietli: Jablko
    
    // Modyfikacja elementu:
    $owoce[1] = "Truskawka"; // Banan zostaje zastapiony Truskawka

    // 2. Tablica asocjacyjna (klucz -> wartosc)
    $uzytkownik = [
        "login" => "jan99",
        "email" => "jan@wp.pl",
        "wiek" => 25
    ];

    echo $uzytkownik["email"] . "<br>"; // Wyswietli: jan@wp.pl
?>

