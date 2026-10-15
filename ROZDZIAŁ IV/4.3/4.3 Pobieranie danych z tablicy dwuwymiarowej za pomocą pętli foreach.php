<?php
    $gry = [
        ["nazwa" => "Wiedzmin: Stary Swiat", "cena" => 299.99, "ilosc" => 5],
        ["nazwa" => "Catan", "cena" => 159.00, "ilosc" => 12],
        ["nazwa" => "Dixit", "cena" => 119.50, "ilosc" => 8]
    ];

    echo "<table border='1' style='border-collapse: collapse; padding: 5px;'>";
    echo "<tr>
            <th>Tytul gry</th>
            <th>Cena</th>
            <th>Dostepna ilosc</th>
          </tr>";

    foreach ($gry as $gra) {
        echo "<tr>";
        echo "<td>" . $gra["nazwa"] . "</td>";
        echo "<td>" . $gra["cena"] . " zl</td>";
        echo "<td>" . $gra["ilosc"] . " szt.</td>";
        echo "</tr>";
    }
    echo "</table>";
?>


