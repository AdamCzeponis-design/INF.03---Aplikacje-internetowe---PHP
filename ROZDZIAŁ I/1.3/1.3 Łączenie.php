<?php
    $strona = "google.pl";
    $plikFoto = "logo.png";

    // 1. Klasyczne laczenie kropka
    echo "Wejdz na strone " . $strona . " i sprawdz oferte. <br>";

    // 2. Wypisywanie linku HTML (zastosowanie naprzemiennych cudzyslowow)
    echo "<a href='https://" . $strona . "'>Kliknij tutaj, aby przejsc do wyszukiwarki</a> <br>";

    // 3. Wypisywanie obrazka HTML
    echo "<img src='" . $plikFoto . "' alt='Logo projektu'>";
?>

