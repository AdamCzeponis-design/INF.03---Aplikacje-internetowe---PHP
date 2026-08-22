<?php
    $f = fopen("logi.txt", "r");
    
    while (feof($f)) {
        $pokaz = fgets();
        echo $pokaz;
    }
?>

