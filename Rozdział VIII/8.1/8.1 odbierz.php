<?php
    // Pobieramy dane z tablicy superglobalnej $_POST
    $imie = $_POST['imie'];
    $wiek = $_POST['wiek'];

    echo "Czesc <strong>" . $imie . "</strong>!<br>";
    echo "Masz " . $wiek . " lat.";
?>

