<?php
    $plik = fopen("punkty.txt", "r");
    $suma = 0;

    while (!feof($plik)) {
        $linia = fgets($plik);      // Pobieramy jedna linie
        $czysta_linia = trim($linia); // WAZNE: Recznie usuwamy ukryte entery!

        // Zabezpieczenie, zeby nie dodawalo ewentualnej pustej linii na samym dole pliku
        if ($czysta_linia != "") { 
            echo "Zdobyto: " . $czysta_linia . " pkt<br>";
            $suma += $czysta_linia; // Dodawanie wartosci
        }
    }

    fclose($plik); // Zamykamy plik
    echo "Suma calkowita: " . $suma;
?>


