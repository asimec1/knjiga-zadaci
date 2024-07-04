<!--
    1. Zadatak
    Napišite PHP skriptu koja provjerava je li osoba punoljetna (18 godina ili više).
    Ako je osoba punoljetna, ispišite "Osoba je punoljetna.", u suprotnom ispišite "Osoba je maloljetna.".
-->

<?php
    // Definiranje varijable za dob osobe
    $godine = 20; // Primjer dobne vrijednosti, može se promijeniti prema potrebi

    // Provjera je li osoba punoljetna
    if ($godine >= 18) {
        echo "Osoba je punoljetna.";
    } else {
        echo "Osoba je maloljetna.";
    }
?>