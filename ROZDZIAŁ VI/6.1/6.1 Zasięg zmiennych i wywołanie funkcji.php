<?php
    // --- PRZYKLAD 1: Zwykla definicja i wywołlanie ---    
    // Tylko DEFINIUJEMY funkcje (kod sie tu jeszcze nie wykonuje)
    function stopkaStrony() {
        echo "<p>Wszelkie prawa zastrzeżone © 2026</p>";
    }
    // WYWOLUJEMY funkcje (teraz tekst pojawi sie na ekranie)
    stopkaStrony(); 
    stopkaStrony(); // Mozemy to robic nieskonczenie wiele razy
    // --- PRZYKLAD 2: Problem zasiegu i slowo "global" ---
    
    $podatek = 23; // Zmienna globalna (na zewnatrz)

    function pokazPodatek() {
        // Bez ponizszej linijki PHP wyrzuci blad "Undefined variable $podatek"
        global $podatek; 
        
        echo "Obecny podatek VAT to: " . $podatek . "%";
    }
    pokazPodatek();
?>

