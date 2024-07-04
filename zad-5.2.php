<!--
    2. Zadatak
    Napišite PHP skriptu koja provjerava je li broj paran ili neparan. Ako je broj paran,
    ispišite "Broj je paran.", u suprotnom ispišite "Broj je neparan.".
-->

<?php
    // Definiranje varijable za broj koji se provjerava
    $broj = 7; // Primjer broja koji se provjerava, može se promijeniti prema potrebi

    // Provjera je li broj paran ili neparan
    if ($broj % 2 == 0) {
        echo "Broj je paran.";
    } else {
        echo "Broj je neparan.";
    }
?>