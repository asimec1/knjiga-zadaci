<!--
    8. Zadatak
    Napišite PHP skriptu koja izračunava cijenu karte za muzej na temelju dobi i članstva korisnika.
    Koristite gniježđene if-else strukture kako biste implementirali sljedeće uvjete:

    •	Ako je korisnik mlađi od 6 godina, ulaz je besplatan.
    •	Ako je korisnik između 6 i 18 godina, cijena je 5 EUR.
    •	Ako je korisnik stariji od 18 godina, cijena je 10 EUR.
    •	Ako je korisnik član muzeja, ostvaruje 50% popusta na cijenu karte (osim za besplatne ulaze).

    Ispišite konačnu cijenu karte za korisnika.
-->

<?php
    // Definiranje varijabli za dob korisnika i članstvo
    $dob = 25; // Primjer dobi korisnika, može se promijeniti prema potrebi
    $clanMuzeja = true; // Primjer članstva korisnika, može biti true (član) ili false (nije član)

    // Inicijalizacija varijable za cijenu karte
    $cijenaKarte = 0;

    // Provjera uvjeta koristeći gniježđene if-else strukture
    if ($dob < 6) {
        $cijenaKarte = 0; // Ulaz je besplatan za djecu mlađu od 6 godina
    } elseif ($dob >= 6 && $dob <= 18) {
        $cijenaKarte = 5; // Cijena karte je 5 EUR za korisnike između 6 i 18 godina
    } elseif ($dob > 18) {
        $cijenaKarte = 10; // Cijena karte je 10 EUR za korisnike starije od 18 godina
    }

    // Provjera dodatnog uvjeta za članstvo i primjena popusta
    if ($cijenaKarte > 0 && $clanMuzeja) {
        $cijenaKarte = $cijenaKarte * 0.5; // Ostvarivanje 50% popusta za članove muzeja (osim za besplatne ulaze)
    }

    // Ispis konačne cijene karte
    echo "Konačna cijena karte: " . $cijenaKarte . " EUR";
?>