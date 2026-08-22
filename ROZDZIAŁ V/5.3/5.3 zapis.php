<?php
    // --- SPOSOB 1: Tryb "w" (Czyszczenie i nadpisywanie) ---
    $plik1 = fopen("status.txt", "w");
    
    // Niewazne co bylo w pliku "status.txt" wczesniej - teraz bedzie tam tylko to zdanie:
    fwrite($plik1, "System dziala poprawnie.");
    fclose($plik1);


    // --- SPOSOB 2: Tryb "a" (Dopisywanie na koncu pliku) ---
    $plik2 = fopen("lista_obecnosci.txt", "a");
    
    // Zwroc uwage na "\n" w podwojnym cudzyslowie! To przejscie do nowej linii.
    $nowy_uczen = "Kowalski Jan\n";
    
    fwrite($plik2, $nowy_uczen); // Dopisuje Kowalskiego bez usuwania starych uczniow
    fclose($plik2);
?>

