<!--
    3. Zadatak
    Napišite PHP skriptu koja provjerava ocjenu studenta. Ako je ocjena 5, ispišite "Odličan!", ako je 4, ispišite "Vrlo dobar!",
    u suprotnom ispišite "Potreban je rad na poboljšanju.".
-->

<?php
    // Definiranje varijable za ocjenu studenta
    $ocjena = 4; // Primjer ocjene studenta, može se promijeniti prema potrebi

    // Provjera ocjene studenta i ispis odgovarajuće poruke
    if ($ocjena == 5) {
        echo "Odličan!";
    } elseif ($ocjena == 4) {
        echo "Vrlo dobar!";
    } else {
        echo "Potreban je rad na poboljšanju.";
    }
?>