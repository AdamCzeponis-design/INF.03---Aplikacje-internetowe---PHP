<?php
    // --- PRZYKLAD 1: Zwykle przekierowanie ---
    // Przenosimy uzytkownika na strone glowna wp.pl
    // header("Location: https://www.wp.pl");
    // exit; 


    // --- PRZYKLAD 2: Przekierowanie z warunkiem ---
    $zalogowany = false;

    if ($zalogowany == false) {
        // Uzytkownik nie jest zalogowany, odsylamy go do formularza logowania
        header("Location: logowanie.php");
        
        // WAZNE: Po header zawsze dajemy exit (lub die).
        // Dzieki temu serwer nie bedzie czytal kodu, ktory znajduje sie ponizej!
        exit; 
    }

    // Ten kod wykona sie tylko dla zalogowanych (bo niezalogowanych "wyrzucil" exit).
    echo "Witaj w tajnym panelu administratora!";
?>


