<?php
    // KROK 1: Polaczenie z serwerem MySQL i wybor bazy danych
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");
    // Sprawdzamy czy polaczenie z serwerem sie powiodlo
    if (!$polaczenie) {
        die("Blad polaczenia z serwerem bazy danych!");
    }
    // KROK 2: Przygotowanie i wyslanie zapytania SQL
    $sql = "SELECT id, nazwa, cena FROM produkty";
    $wynik = mysqli_query($polaczenie, $sql);
    // KROK 3: Sprawdzenie wyniku i odczyt statystyk
    if ($wynik) {
        $ile_wierszy = mysqli_num_rows($wynik);
        $ile_kolumn = mysqli_num_fields($wynik);

        echo "<h3>Zapytanie wykonane pomyslnie!</h3>";
        echo "<p>Pobrano wierszy (rekordow): <strong>$ile_wierszy</strong></p>";
        echo "<p>Pobrano kolumn (pol): <strong>$ile_kolumn</strong></p>";
    } else {
        // Jesli w zapytaniu wystapil blad, wyswietlamy go z mysqli_error
        echo "<p style='color: red;'>Blad SQL: " . mysqli_error($polaczenie) . "</p>";
    }
    // KROK 4: Zamkniecie polaczenia
    mysqli_close($polaczenie);
?>




