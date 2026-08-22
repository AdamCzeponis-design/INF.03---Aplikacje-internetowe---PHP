<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator wieku</title>
</head>
<body>

    <!-- Formularz wysyla dane do tego samego pliku (brak action) -->
    <form method="post">
        <label>Podaj rok urodzenia:</label>
        <input type="number" name="rok_urodzenia">
        <input type="submit" value="Oblicz">
    </form>

    <hr>

    <?php
        // Sprawdzamy czy formularz zostal w ogole wyslany
        if (isset($_POST['rok_urodzenia'])) {
            $rok = $_POST['rok_urodzenia'];
            $aktualny_rok = 2026;
            $wiek = $aktualny_rok - $rok;

            echo "<p>Twoj wiek to: <strong>" . $wiek . " lat</strong>.</p>";
        }
    ?>

</body>
</html>

