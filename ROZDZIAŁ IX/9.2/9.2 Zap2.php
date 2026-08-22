<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");

    $sql = "SELECT nazwa, cena FROM produkty";
    $wynik = mysqli_query($polaczenie, $sql);

    if ($wynik) {
        echo "<ol>";

        // mysqli_fetch_row zwraca indeksy 0, 1, 2...
        // Index 0 = pierwsza kolumna (nazwa), Index 1 = druga kolumna (cena)
        while ($wiersz = mysqli_fetch_row($wynik)) {
            echo "<li>" . $wiersz[0] . "  cena: " . $wiersz[1] . " PLN</li>";
        }

        echo "</ol>";
    }

    mysqli_close($polaczenie);
?>


