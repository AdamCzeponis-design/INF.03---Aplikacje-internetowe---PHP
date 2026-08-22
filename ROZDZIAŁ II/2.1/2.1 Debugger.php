<?php
    $zalogowany = true;
    $czyAdmin = false;
    
    // Skrypt ma sprawdzic, czy uzytkownik jest zalogowany LUB jest adminem
    $dostep = $zalogowany &| $czyAdmin;
    var_dump(dostep);
?>


