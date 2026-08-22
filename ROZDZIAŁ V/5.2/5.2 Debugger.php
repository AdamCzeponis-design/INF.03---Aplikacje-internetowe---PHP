<?php
    $plik = fopen("dane.txt", "r");
    
    while (!feof($plik)) {
        echo "Przetwarzam plik...<br>";
    }
    
    fclose($plik);
?>
