<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona z sesja</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['zalogowany'] = true;
    ?>
</body>
</html>

