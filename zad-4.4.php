<!--
    4. Zadatak
    Napišite kod koji će generirati niz znakova. 
    U varijabli $str potrebno je odrediti početni string "Programiranje". 
    Koristeći samo operator konkatenacije (".="), dodati na početni niz druge nizove "Web", "Aplikacija".
-->

<?php
    // Inicijalizacija pocetnog stringa
    $str = "Programiranje";

    // Dodavanje ostalih stringova koristeci operator konkatenacije
    $str .= " Web";
    $str .= " aplikacija";
    
    // Ispis
    echo $str;
?>