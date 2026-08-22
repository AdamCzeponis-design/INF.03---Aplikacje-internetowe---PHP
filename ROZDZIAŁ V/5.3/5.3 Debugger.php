<?php
    $numer = "500-600-700";
    $plik = fopen("baza.txt", "a");
    
    // Proba zapisu z dodaniem nowej linii
    fwrite($plik, $numer . '\n'); 
    
    fclose($plik);
?>

