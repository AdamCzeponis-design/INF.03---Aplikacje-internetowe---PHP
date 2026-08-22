<?php
    // Glowna tablica zawiera 2 podtablice (wiersze)
    $dziennik = [
        ["Jan", 4, 5, 3], // Wiersz 0
        ["Anna", 5, 5, 6] // Wiersz 1
    ];

    // Chcemy wyciagnac imia "Anna" (wiersz 1, kolumna 0)
    echo "Studentka: " . $dziennik[1][0] . "<br>";

    // Chcemy wyciagnac pierwsza ocene Jana (wiersz 0, kolumna 1)
    echo "Pierwsza ocena Jana: " . $dziennik[0][1] . "<br>";
?>

