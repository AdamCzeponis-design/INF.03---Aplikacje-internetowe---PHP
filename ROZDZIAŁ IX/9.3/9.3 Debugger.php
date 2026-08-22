<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");

    // Zwroc uwage na warunek SQL i brak sprawdzenia isset
    $kat_id = $_POST['kategoria'];

    $sql = "SELECT * FROM produkty WHERE kategoria_id = $kat_id";
    $wynik = mysqli_query($polaczenie, $sql);

    while ($wiersz = mysqli_fetch_array($wynik)) {
        echo "<p>" . $wiersz['nazwa'] . "</p>";
    }

    mysqli_close($polaczenie);
?>


