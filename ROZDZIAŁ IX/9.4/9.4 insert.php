<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj produkt</title>
</head>
<body>
    <h2>Dodawanie nowego produktu</h2>
    <form action="" method="post">
        <label>Nazwa produktu: <input type="text" name="nazwa" required></label><br><br>
        <label>Cena (PLN): <input type="number" step="0.01" name="cena" required></label><br><br>
        <button type="submit" name="dodaj">Dodaj do bazy</button>
    </form>
    <?php
        if (isset($_POST['dodaj'])) {
            $nazwa = $_POST['nazwa'];
            $cena = $_POST['cena'];
            $polaczenie = mysqli_connect("localhost", "root", "", "sklep_db");
            // Przygotowanie zapytania INSERT
            $sql = "INSERT INTO produkty (nazwa, cena) VALUES ('$nazwa', $cena)";
            // Sprawdzenie czy operacja powiodla sie
            if (mysqli_query($polaczenie, $sql)) {
                echo "<p style='color: green;'>Pomyslnie dodano produkt: <strong>$nazwa</strong>!</p>";
            } else {
                echo "<p style='color: red;'>Blad podczas dodawania: " . mysqli_error($polaczenie) . "</p>";
            }
            mysqli_close($polaczenie);
        }
    ?></body></html>