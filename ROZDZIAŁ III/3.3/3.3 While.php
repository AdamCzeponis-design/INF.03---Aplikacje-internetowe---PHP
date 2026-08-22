<?php
    $x = 50;

    // Petla while - nie wyswietli nic, bo 50 nie jest mniejsze od 10
    while ($x < 10) {
        echo "Tekst z petli while <br>";
        $x++;
    }

    // Petla do...while - wykona kod raz, wyswietli napis i dopiero wtedy zakonczy dzialanie
    do {
        echo "Tekst z petli do-while <br>";
        $x++;
    } while ($x < 10);
?>


