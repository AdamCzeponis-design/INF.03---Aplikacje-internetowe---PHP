<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");

    $sql = "SELECT nazwa, opis, cena, plik_foto FROM produkty";
    $wynik = mysqli_query($polaczenie, $sql);

    if ($wynik) {
        // Petla generuje osobna sekcje/div dla kazdego rekordu
        while ($wiersz = mysqli_fetch_assoc($wynik)) {
            echo "<div class='karta-produktu'>";
            echo "<img src='" . $wiersz['plik_foto'] . "' alt='Zdjecie produktu'>";
            echo "<h3>" . $wiersz['nazwa'] . "</h3>";
            echo "<p>" . $wiersz['opis'] . "</p>";
            echo "<p class='cena'>Cena: " . $wiersz['cena'] . " zl</p>";
            echo "</div>";
        }
    }

    mysqli_close($polaczenie);
?>



