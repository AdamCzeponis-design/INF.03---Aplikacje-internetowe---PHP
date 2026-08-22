<?php
    session_start();

    // Obsluga wylogowania (niszczenie calej sesji)
    if (isset($_POST['wyloguj'])) {
        session_destroy(); // Niszczy sesje po stronie serwera
        header("Location: lekcja10_1.php"); // Odswiezenie strony
        exit();
    }

    // Usuniecie konkretnej zmiennej z sesji
    if (isset($_POST['usun_uprawnienia'])) {
        unset($_SESSION['rola']); // Usuwa tylko pole 'rola'
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel Uzytkownika</title>
</head>
<body>
    <?php
        // Sprawdzamy czy istnieje zmienna sesyjna 'zalogowany'
        if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true) {
            echo "<h2>Witaj w panelu, " . $_SESSION['uzytkownik'] . "!</h2>";
            
            echo "<form method='post'>";
            echo "<button type='submit' name='wyloguj'>Wyloguj calkowicie (session_destroy)</button> ";
            echo "<button type='submit' name='usun_uprawnienia'>Usun role (unset)</button>";
            echo "</form>";
        } else {
            echo "<h2>Brak dostepu! Zaloguj sie najpierw.</h2>";
        }
    ?>
</body>
</html>



