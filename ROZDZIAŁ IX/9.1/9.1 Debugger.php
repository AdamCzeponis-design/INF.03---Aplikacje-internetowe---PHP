<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");

    $sql = "SELECT * FROM nieistniejaca_tabela";
    
    // Gdzie sa bledy w ponizszych linijkach?
    $wynik = mysqli_query($sql, $polaczenie);

    if (!$wynik) {
        echo "Blad zapytania: " . mysqli_error($wynik);
    }

    mysqli_close($polaczenie);
?>




