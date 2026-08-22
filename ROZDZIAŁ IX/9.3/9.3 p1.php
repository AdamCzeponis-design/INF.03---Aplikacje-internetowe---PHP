<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Filtrowanie produktow</title>
</head>
<body>
    <h2>Wybierz kategorie produktow:</h2>

    <?php
        $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");
    ?>

    <!-- FORMULARZ Z DYNAMICZNA LISTA SELECT -->
    <form action="" method="post">
        <select name="kategoria">
            <?php
                $sql_kat = "SELECT id, nazwa FROM kategorie";
                $wynik_kat = mysqli_query($polaczenie, $sql_kat);

                while ($wiersz_kat = mysqli_fetch_array($wynik_kat)) {
                    echo "<option value='" . $wiersz_kat['id'] . "'>" . $wiersz_kat['nazwa'] . "</option>";
                }
            ?>
        </select>
        <button type="submit" name="pokaz">Pokaz produkty</button>
    </form>
    <hr>
    <!-- WYSWIETLANIE PRZEFILTROWANYCH WYNIKOW -->
    <?php
        if (isset($_POST['pokaz']) && isset($_POST['kategoria'])) {
            $wybrana_kategoria = $_POST['kategoria'];

            // Zapytanie przefiltrowane po kategoria_id
            $sql_prod = "SELECT nazwa, cena FROM produkty WHERE kategoria_id = $wybrana_kategoria";
            $wynik_prod = mysqli_query($polaczenie, $sql_prod);

            if (mysqli_num_rows($wynik_prod) > 0) {
                echo "<h3>Produkty z wybranej kategorii:</h3>";
                echo "<table border='1'>";
                echo "<tr><th>Nazwa produktu</th><th>Cena</th></tr>";

                while ($wiersz_prod = mysqli_fetch_array($wynik_prod)) {
                    echo "<tr>";
                    echo "<td>" . $wiersz_prod['nazwa'] . "</td>";
                    echo "<td>" . $wiersz_prod['cena'] . " zl</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p>Brak produktow w tej kategorii.</p>";
            }
        }

        mysqli_close($polaczenie);
    ?>
</body>
</html>