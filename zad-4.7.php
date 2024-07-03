<!--
    7. Zadatak
    Napišite kod koji generira naziv korisničkog računa na temelju imena i godine rođenja korisnika na sljedeći način:
    Uzmite prva tri slova imena korisnika, dodajte znak '@' i posljednje dvije znamenke godine rođenja korisnika.
    Napomena: koristite funkciju substr koja služi za izdvajanje podniza iz niza.
    https://www.php.net/manual/en/function.substr.php

-->

<?php
    // Podaci korisnika
    $ime = "Ana";
    $godina_rodenja = 1995;

    // Dobivanje prvih tri slova imena
    $prva_tri_slova = substr($ime, 0, 3);

    // Dobivanje posljednjih dvije znamenke godine rođenja
    $zadnje_dvije_znamenke = substr($godina_rodenja, -2);

    // Spajanje korisničkog računa
    $korisnicki_racun = $prva_tri_slova . "@" . $zadnje_dvije_znamenke;

    // Ispis rezultata
    echo "Korisnički račun: " . $korisnicki_racun;
?>
