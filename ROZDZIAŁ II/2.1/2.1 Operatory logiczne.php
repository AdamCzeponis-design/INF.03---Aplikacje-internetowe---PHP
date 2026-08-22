<?php
    $maWiek = true;
    $maBilet = false;

    $wejscieAND = $maWiek && $maBilet;
    $wejscieOR  = $maWiek || $maBilet;
    $brakBiletu = !$maBilet;

    var_dump($wejscieAND); // Wyswietli: bool(false) - bo nie ma biletu
    var_dump($wejscieOR);  // Wyswietli: bool(true)  - bo spełnia jeden z warunkow
    var_dump($brakBiletu); // Wyswietli: bool(true)  - bo zaprzeczamy false
?>
