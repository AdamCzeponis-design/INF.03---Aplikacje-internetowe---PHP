<?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 4) {
            continue; // Cyfra 4 zostanie pominieta! Serwer przeskoczy do $i = 5.
        }

        if ($i == 8) {
            break; // Przy cyfrze 8 petla zostaje calkowicie zamknieta.
        }

        echo "Liczba: $i <br>";
    }
    echo "Koniec petli.";
?>

