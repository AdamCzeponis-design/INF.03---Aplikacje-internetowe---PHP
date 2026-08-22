<?php
    // Zapisujemy ciasteczko przed kodem HTML!
    if (isset($_POST['zapisz'])) {
        $imie = $_POST['imie'];
        // Ciasteczko wazne przez 7 dni (7 * 86400 sekund)
        setcookie("zapisane_imie", $imie, time() + (86400 * 7));
        
        // Aktualizujemy zmienna w biezacym wykonaniu dla natychmiastowego efektu
        $_COOKIE['zapisane_imie'] = $imie;
    }

    // Usuwanie ciasteczka
    if (isset($_POST['usun'])) {
        setcookie("zapisane_imie", "", time() - 3600);
        unset($_COOKIE['zapisane_imie']);
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zapamietaj imie</title>
</head>
<body>
    <?php if (isset($_COOKIE['zapisane_imie'])): ?>
        <h2>Witaj ponownie, <?php echo $_COOKIE['zapisane_imie']; ?>!</h2>
        <form method="post">
            <button type="submit" name="usun">Zapomnij mnie</button>
        </form>
    <?php else: ?>
        <h2>Podaj swoje imie:</h2>
        <form method="post">
            <input type="text" name="imie" required>
            <button type="submit" name="zapisz">Zapamietaj mnie</button>
        </form>
    <?php endif; ?>
</body>
</html>


