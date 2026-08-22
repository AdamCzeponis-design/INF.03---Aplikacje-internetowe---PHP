<?php
    $dzien = 29;
    $miesiac = 2;
    $rok = 2025;

    // Proba sprawdzania daty
    if (checkdate($dzien, $miesiac, $rok)) {
        echo "Data jest poprawna!";
    } else {
        echo "Bledna data!";
    }
?>


