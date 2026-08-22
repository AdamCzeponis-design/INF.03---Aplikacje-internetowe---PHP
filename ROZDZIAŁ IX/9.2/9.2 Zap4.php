<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");
    $sql = "SELECT nazwa, cena, ilosc FROM produkty";
    $wynik = mysqli_query($polaczenie, $sql);
    if ($wynik) {
        echo "<table border='1'>";
        echo "<tr><th>Nazwa</th><th>Cena Brutto (23% VAT)</th><th>Dostepnosc</th></tr>";
        while ($wiersz = mysqli_fetch_array($wynik)) {
            // 1. Obliczenie ceny brutto w PHP
            $cena_brutto = $wiersz['cena'] * 1.23;
            // 2. Warunek logiczny ustalajacy kolor/status na podstawie pola 'ilosc'
            if ($wiersz['ilosc'] > 0) {
                $status = "<span style='color: green;'>Dostepny (" . $wiersz['ilosc'] . " szt.)</span>";
            } else {
                $status = "<span style='color: red;'>Brak w magazynie</span>";
            }
            echo "<tr>";
            echo "<td>" . $wiersz['nazwa'] . "</td>";
            echo "<td>" . number_format($cena_brutto, 2) . " zł</td>";
            echo "<td>" . $status . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    mysqli_close($polaczenie);
?>


