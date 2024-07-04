<!--
    6. Zadatak
    Napišite PHP skriptu koja provjerava više uvjeta. Ako je broj veći od 100, ispišite
    "Broj je veći od 100.", ako je između 50 i 100, ispišite "Broj je između 50 i 100.",
    ako je manji od 50, ispišite "Broj je manji od 50.".
-->

<?php
    // Definiranje varijable za broj koji se provjerava
    $broj = 75; // Primjer broja koji se provjerava, može se promijeniti prema potrebi

    // Provjera više uvjeta i ispis odgovarajuće poruke
    if ($broj > 100) {
        echo "Broj je veći od 100.";
    } elseif ($broj >= 50 && $broj <= 100) {
        echo "Broj je između 50 i 100.";
    } elseif ($broj < 50) {
        echo "Broj je manji od 50.";
    }
?>