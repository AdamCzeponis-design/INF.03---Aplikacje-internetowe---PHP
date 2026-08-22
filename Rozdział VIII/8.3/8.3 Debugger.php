<form method="post">
    <label><input type="checkbox" name="karta_klubowa" value="tak"> Mam karte klubowa</label>
    <button type="submit">Oblicz rabat</button>
</form>

<?php
    // Gdzie lezy blad logiczny w ponizszym kodzie?
    $karta = $_POST['karta_klubowa']; 

    if ($karta == "tak") {
        echo "Przydzielono rabat 20 zl!";
    } else {
        echo "Brak rabatu.";
    }
?>


