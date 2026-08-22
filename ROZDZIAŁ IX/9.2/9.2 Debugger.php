<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");
    $wynik = mysqli_query($polaczenie, "SELECT nazwa, cena FROM produkty");

    // Gdzie sa bledy w ponizszej petli?
    while ($wiersz = mysqli_fetch_row($wynik)) {
        echo "<div class='produkt'>";
        echo "<h3>" . $wiersz['nazwa'] . "</h3>";
        echo "<p>Cena: " . $wiersz[1] . " zl</p>";
        echo "</div>";
    }

    mysqli_close($polaczenie);
?>



