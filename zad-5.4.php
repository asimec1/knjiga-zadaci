<!--
    4. Zadatak
    Napišite PHP skriptu koja provjerava temperaturu i ispisuje odgovarajuću poruku. Ako je temperatura ispod 0 stupnjeva,
    ispišite "Ledeno je!", ako je između 0 i 20, ispišite "Hladno je.", ako je iznad 20, ispišite "Toplo je.".
-->

<?php
    // Definiranje varijable za temperaturu
    $temperatura = 15; // Primjer temperature, može se promijeniti prema potrebi

    // Provjera temperature i ispis odgovarajuće poruke
    if ($temperatura < 0) {
        echo "Ledeno je!";
    } elseif ($temperatura >= 0 && $temperatura <= 20) {
        echo "Hladno je.";
    } else {
        echo "Toplo je.";
    }
?>