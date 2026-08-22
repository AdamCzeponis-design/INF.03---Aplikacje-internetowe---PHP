<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep - Opcje zamowienia</title>
</head>
<body>

<form method="post">
    <!-- 1. CHECKBOX (Logika True/False) -->
    <p>
        <label>
            <input type="checkbox" name="zgoda_marketing" value="1">
            Chce otrzymywac newsletter (opcjonalnie)
        </label>
    </p>

    <!-- 2. RADIO (Wybor jednej opcji) -->
    <p>Metoda platnosci:<br>
        <label><input type="radio" name="platnosc" value="blik" checked> BLIK</label><br>
        <label><input type="radio" name="platnosc" value="karta"> Karta platnicza</label>
    </p>

    <!-- 3. SELECT (Lista rozwijana) -->
    <p>Sposob dostawy:<br>
        <select name="dostawa">
            <option value="kurier">Kurier (+15 zl)</option>
            <option value="odbior_osobisty">Odbior osobisty (0 zl)</option>
        </select>
    </p>

    <!-- 4. BUTTON (Przycisk przesylajacy wartosc) -->
    <button name="status_zamowienia" value="zlozone">Zloz zamowienie</button>
</form>

<hr>

<?php
    // Reagujemy tylko po kliknieciu w przycisk zamowienia
    if (isset($_POST['status_zamowienia']) && $_POST['status_zamowienia'] === 'zlozone') {

        // --- OBSLUGA CHECKBOXA (Sprowadzenie do Prawda/Falsz) ---
        $czy_marketing_zgoda = isset($_POST['zgoda_marketing']); // true gdy zaznaczone, false gdy nie

        // --- OBSLUGA RADIO I SELECT ---
        $platnosc = $_POST['platnosc'];
        $dostawa = $_POST['dostawa'];

        // Analiza i wyswietlanie wynikow:
        echo "<h3>Podsumowanie zamowienia:</h3>";
        
        // Operowanie na zmiennej boolean (True/False) z checkboxa:
        if ($czy_marketing_zgoda) {
            echo "<p>Zgoda na newsletter: <strong>UDZIELONA</strong></p>";
        } else {
            echo "<p>Zgoda na newsletter: <strong>BRAK ZGODY</strong></p>";
        }

        echo "<p>Wybrana platnosc: <strong>" . $platnosc . "</strong></p>";
        echo "<p>Wybrana dostawa: <strong>" . $dostawa . "</strong></p>";
    }
?>

</body>
</html>