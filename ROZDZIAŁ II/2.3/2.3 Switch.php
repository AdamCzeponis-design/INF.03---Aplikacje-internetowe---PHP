<?php
    $rola = "redaktor";

    switch ($rola) {
        case "admin":
            echo "Masz pelny dostep do systemu.";
            break;
        case "redaktor":
            echo "Mozesz edytowac artykuly.";
            break;
        default:
            echo "Profil standardowy - tylko odczyt.";
            break;
    }
?>



