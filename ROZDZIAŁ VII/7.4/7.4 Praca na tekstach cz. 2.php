<?php
    // --- PRZYKLAD 1: Czyszczenie spacji i zamiana znakow ---
    $cena_wpisana = "  129,99 zl  ";

    // 1. Oczyszczamy spacje z brzegow
    $cena_czysta = trim($cena_wpisana); // "129,99 zl"

    // 2. Zamieniamy polski przecinek na kropke (wymagana do obliczen)
    $cena_sql = str_replace(",", ".", $cena_czysta); // "129.99 zl"

    echo "Oryginal: '" . $cena_wpisana . "'<br>";
    echo "Po obrobce: '" . $cena_sql . "'<br><br>";

    // --- PRZYKLAD 2: Wyszukiwanie znaku z bezpiecznym porownaniem ---
    $email = "jan.kowalski@example.com";
    $pozycja_malpy = strpos($email, "@");

    // Uzywamy !== false, aby nie pomylic indeksu 0 z brakiem wynikow
    if ($pozycja_malpy !== false) {
        echo "Znak @ znajduje sie na pozycji numer: " . $pozycja_malpy . "<br><br>";
    } else {
        echo "Adres email jest niepoprawny (brak @)!<br><br>";
    }
    // --- PRZYKLAD 3: Wycinanie i maskowanie tekstu (substr) ---
    $pesel = "98051212345"; // 11 cyfr

    // Wycinamy ostatnie 4 cyfry (uzywajac ujemnego indeksu)
    $ostatnie_cyfry = substr($pesel, -4);

    // Budujemy zamaskowany PESEL
    $pesel_ukryty = "*******" . $ostatnie_cyfry;

    echo "Zamaskowany PESEL: " . $pesel_ukryty;
?>