<?php
    // Proba ustawienia domyslnego wieku na 18
    function dodajPacjenta($wiek = 18, $imie) {
        echo "Dodano pacjenta: " . $imie . ", wiek: " . $wiek;
    }

    // Wywolanie funkcji z jednym argumentem (imieniem)
    dodajPacjenta("Kamil");
?>


