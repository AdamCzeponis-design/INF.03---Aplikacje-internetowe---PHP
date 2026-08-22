<?php
    // 1. ZAWSZE W PIERWSZEJ LINII SKRYPTU!
    session_start();
    // Sprawdzamy, czy wyslano formularz
    if (isset($_POST['zaloguj'])) {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        // Uproszczona weryfikacja (na egzaminie dane pobieramy z bazy SQL)
        if ($login == "admin" && $haslo == "tajne123") {
            // Rejestrujemy zmienne w sesji
            $_SESSION['zalogowany'] = true;
            $_SESSION['uzytkownik'] = $login;
            echo "<p style='color:green;'>Zalogowano pomyslnie!</p>";
        } else {
            echo "<p style='color:red;'>Bledne dane logowania!</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <form method="post">
        <label>Login: <input type="text" name="login" required></label><br><br>
        <label>Haslo: <input type="password" name="haslo" required></label><br><br>
        <button type="submit" name="zaloguj">Zaloguj sie</button>
    </form>
</body>
</html>






