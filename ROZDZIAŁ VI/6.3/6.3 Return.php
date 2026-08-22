<?php
    // --- PRZYKLAD 1: Zwracanie wartosci i zapis do zmiennej ---
    function poleKwadratu($bok) {
        $pole = $bok * $bok;
        return $pole; // Oddajemy wynik do miejsca wywolania
    }
    // Wynik funkcji "laduje" w zmiennej $mojePole
    $mojePole = poleKwadratu(4); 
    echo "Pole kwadratu wynosi: " . $mojePole . "<br>";
    // --- PRZYKLAD 2: Return jako natychmiastowy koniec funkcji ---
    function dzielenie($a, $b) {
        // Zabezpieczenie przed dzieleniem przez zero
        if ($b == 0) {
            return "Blad: Nie mozna dzielic przez zero!"; 
            // Jesli ten warunek jest spelniony, funkcja TU SIE KONCZY!
        }
        // Ta linijka wykona sie TYLKO wtedy, gdy $b nie bylo zerem
        return $a / $b; 
    }
    echo dzielenie(10, 2) . "<br>"; // Wyswietli: 5
    echo dzielenie(10, 0);        // Wyswietli: Blad: Nie mozna dzielic przez zero!
?>

<?php
    function pomnoz($a, $b) {
        return $a * $b;
        echo "Mnożenie wykonane!"; // Dlaczego to nie działa?
    }

    echo pomnoz(4, 5);
?>