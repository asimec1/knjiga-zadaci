<!--
    5. Zadatak
    Napišite PHP skriptu koja provjerava je li korisnik član kluba ili nije. Ako je korisnik član, ispišite "Dobrodošli, članu kluba!",
    u suprotnom ispišite "Morate postati član da biste nastavili.".
-->

<?php
    // Definiranje varijable koja označava je li korisnik član kluba (može biti true ili false)
    $clanKluba = true; // Primjer postavljanja da je korisnik član kluba, može se promijeniti prema potrebi

    // Provjera je li korisnik član kluba i ispis odgovarajuće poruke
    if ($clanKluba) {
        echo "Dobrodošli, članu kluba!";
    } else {
        echo "Morate postati član da biste nastavili.";
    }
?>