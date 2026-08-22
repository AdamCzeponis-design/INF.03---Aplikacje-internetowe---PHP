<?php
    if (isset($_POST['usun'])) {
        // Uczen probowal usunac ciasteczko w ten sposob:
        unset($_COOKIE['uzytkownik']);
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"><title>Usuwanie</title></head>
<body>
    <form method="post">
        <button type="submit" name="usun">Usun ciasteczko</button>
    </form>
</body>
</html>



