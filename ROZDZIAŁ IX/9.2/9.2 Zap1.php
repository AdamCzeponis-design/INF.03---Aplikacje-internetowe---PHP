<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");
    $sql = "SELECT id, nazwa, cena FROM produkty";
    $wynik = mysqli_query($polaczenie, $sql);
    if ($wynik && mysqli_num_rows($wynik) > 0) {
        // Otwarcia tabeli i naglowki PRZED petla
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nazwa produktu</th><th>Cena</th></tr>";

        // Iteracyjne pobieranie wierszy (tablica asocjacyjna)
        while ($wiersz = mysqli_fetch_array($wynik)) {
            echo "<tr>";
            echo "<td>" . $wiersz['id'] . "</td>";
            echo "<td>" . $wiersz['nazwa'] . "</td>";
            echo "<td>" . $wiersz['cena'] . " zl</td>";
            echo "</tr>";
        }
        // Zamkniecie tabeli PO petli
        echo "</table>";
    } else {
        echo "<p>Brak danych do wyswietlenia.</p>";
    }
    mysqli_close($polaczenie);
?>


