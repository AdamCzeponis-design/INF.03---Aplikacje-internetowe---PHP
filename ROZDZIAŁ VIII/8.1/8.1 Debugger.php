<form method="post">
    <!-- Gdzie tkwi blad w ponizszym polu? -->
    <label>Podaj imie: <input type="text" id="imie"></label>
    <input type="submit" value="Zapisz">
</form>

<?php
    if (isset($_POST['imie'])) {
        echo "Witaj " . $_POST['imie'];
    }
?>

