<?php
    $nazwaPliku = "goscie.txt";

    // SPOSOB A: Szybki (funkcja file + FILE_IGNORE_NEW_LINES 
    // "odcina" znaki konca linii z kazdego elementu tablicy.)
    if (file_exists($nazwaPliku)) {
        $linie = file($nazwaPliku, FILE_IGNORE_NEW_LINES);
        echo "Pierwszy gosc to: " . $linie[0] . "<br>---<br>";
    }

    // SPOSOB B: Klasyczny strumieniowy (wymagany na egzaminie INF.03)
    if (file_exists($nazwaPliku)) {
        $plik = fopen($nazwaPliku, "r"); // Otwarcie do odczytu

        // Petla wykonuje sie, dopoki NIE nastapil koniec pliku (feof = file end of file)
        while (!feof($plik)) {
            $linia = fgets($plik); // Pobierz jedna linie
            echo "Odczytano: " . $linia . "<br>";
        }

        fclose($plik); // Obowiazkowe zamkniecie!
    } else {
        echo "Plik nie istnieje!";
    }
?>

