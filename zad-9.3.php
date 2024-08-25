<!--
    3. Zadatak
    Definiraj konstantu PI i funkciju calculateArea koja prima polumjer kruga i vraća površinu
    kruga koristeći definirani PI. Ispiši površinu kruga s polumjerom 5.
-->

<?php
    // Definiranje konstante PI
    define("pi", 3.14159);

    // Definicija funkcije calculateArea koja prima polumjer kruga i vraća površinu kruga
    function calculateArea($polumjer) {
        $povrsina = pi * $polumjer * $polumjer;
        return $povrsina;
    }

    // Poziv funkcije calculateArea za polumjer 5 i spremanje rezultata
    $polumjer = 5;
    $povrsina_kruga = calculateArea($polumjer);

    // Ispisivanje rezultata
    echo "Površina kruga s polumjerom $polumjer je: " . $povrsina_kruga;
?>