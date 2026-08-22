<?php
    // 1. Ustawiamy strefe czasowa na Polske
    date_default_timezone_set("Europe/Warsaw");

    // --- PRZYKLAD 1: Budowanie wlasnej daty z mktime ---
    // Tworzymy date: Godzina 15:30:00, dnia 24 Grudnia 2026 roku
    // Kolejnosc: godzina, minuta, sekunda, miesiac, dzien, rok
    $wigilia_sekundy = mktime(15, 30, 0, 12, 24, 2026);
    echo "Wigilia 2026 wygenerowana przez mktime: " . date("d.m.Y H:i:s", $wigilia_sekundy) . "<br><br>";


    // --- PRZYKLAD 2: Walidacja daty za pomoca checkdate ---
    $dzien = 31;
    $miesiac = 4; // Kwiecien ma tylko 30 dni!
    $rok = 2026;

    if (checkdate($miesiac, $dzien, $rok)) {
        echo "Data $dzien.$miesiac.$rok jest POPRAWNA.<br><br>";
    } else {
        echo "BLAD: Data $dzien.$miesiac.$rok NIE ISTNIEJE w kalendarzu!<br><br>";
    }


    // --- PRZYKLAD 3: Wyliczanie terminu platnosci i sprawdzanie przeterminowania ---
    $data_wystawienia = "2026-05-10";
    $sekundy_wystawienia = strtotime($data_wystawienia);

    // Dodajemy 14 dni do daty wystawienia
    $sekundy_terminu = strtotime("+14 days", $sekundy_wystawienia);
    $data_terminu = date("Y-m-d", $sekundy_terminu);

    echo "Data wystawienia faktury: " . $data_wystawienia . "<br>";
    echo "Termin zaplaty (14 dni): " . $data_terminu . "<br>";

    // Sprawdzamy czy dzisiejsza data przekroczyla termin
    $dzisiaj_sekundy = time(); // Aktualny czas

    if ($dzisiaj_sekundy > $sekundy_terminu) {
        echo "<strong style='color:red;'>UWAGA: Termin zaplaty minal!</strong>";
    } else {
        echo "<strong style='color:green;'>Faktura jest jeszcze w terminie.</strong>";
    }
?>


