<?php
    $koszyk = ["Chleb", "Maslo"];

    // 1. Dodawanie elementu na koniec tablicy
    array_push($koszyk, "Mleko", "Ser"); // Koszyk ma teraz 4 elementy

    // 2. Sortowanie alfabetyczne
    sort($koszyk); // Uklada: Chleb, Maslo, Mleko, Ser

    // 3. Wyszukiwanie elementu w tablicy
    if (in_array("Maslo", $koszyk)) {
        echo "Maslo jest juz w koszyku!<br>";
    }

    // 4. Usuwanie ostatniego elementu
    $usuniety = array_pop($koszyk); // Usuwa "Ser" i zapisuje go do zmiennej
    echo "Usunieto z koszyka: " . $usuniety;
?>

