<?php
    if (isset($_POST['dodaj'])) {
        $nazwa_kat = $_POST['nazwa_kategorii'];

        $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");

        // Gdzie tkwi blad w ponizszej linijce?
        $sql = "INSERT INTO kategorie (nazwa) VALUES ($nazwa_kat)";

        mysqli_query($polaczenie, $sql);
        mysqli_close($polaczenie);
    }
?>



