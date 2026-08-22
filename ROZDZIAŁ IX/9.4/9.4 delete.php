<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Usun produkt</title>
</head>
<body>
    <h2>Usuwanie produktu z bazy</h2>
    <form action="" method="post">
        <label>Podaj ID produktu do usuniecia: <input type="number" name="id_produkty" required></label>
        <button type="submit" name="usun">Usun produkt</button>
    </form>
    <?php
        if (isset($_POST['usun'])) {
            $id = $_POST['id_produkty'];
            $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");
            $sql = "DELETE FROM produkty WHERE id = $id";
            if (mysqli_query($polaczenie, $sql)) {
                // Sprawdzamy, czy jakikolwiek wiersz zostal faktycznie usuniety
                if (mysqli_affected_rows($polaczenie) > 0) {
                    echo "<p style='color: green;'>Usunieto produkt o ID: $id.</p>";
                } else {
                    echo "<p style='color: orange;'>Nie znaleziono produktu o podanym ID: $id.</p>";
                }
            } else {
                echo "<p style='color: red;'>Blad zapytania: " . mysqli_error($polaczenie) . "</p>";
            }

            mysqli_close($polaczenie);
        }
    ?>
</body>
</html>


