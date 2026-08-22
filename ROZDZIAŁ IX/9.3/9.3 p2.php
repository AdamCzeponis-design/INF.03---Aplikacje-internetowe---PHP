<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");

    // Jesli formularz zostal wyslany
    if (isset($_POST['wybrany_produkt'])) {
        $id_prod = $_POST['wybrany_produkt'];

        // Pobieramy dane konkretnego produktu po jego ID
        $sql = "SELECT nazwa, cena, zdjecie FROM produkty WHERE id = $id_prod";
        $wynik = mysqli_query($polaczenie, $sql);

        if ($wiersz = mysqli_fetch_array($wynik)) {
            echo "<div class='szczegoly'>";
            echo "<h2>" . $wiersz['nazwa'] . "</h2>";
            echo "<img src='obrazy/" . $wiersz['zdjecie'] . "' alt='Zdjecie' style='width:200px;'><br>";
            echo "<p>Cena: <strong>" . $wiersz['cena'] . " zl</strong></p>";
            echo "</div>";
        }
    }
    mysqli_close($polaczenie);
?>


