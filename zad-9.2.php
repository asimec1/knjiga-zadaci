<!--
    2. Zadatak
    Definiraj konstantu LENGTH sa vrijednošću 10 i WIDTH sa vrijednošću 5. Napiši funkciju calculatePerimeter koja vraća opseg
    pravokutnika koristeći definirane konstante. Ispiši opseg pravokutnika.
-->

<?php
    // Definiranje konstanti LENGTH i WIDTH
    define("LENGTH", 10);
    define("WIDTH", 5);

    // Definicija funkcije calculatePerimeter koja vraća opseg pravokutnika
    function calculatePerimeter() {
        $opseg = 2 * (LENGTH + WIDTH);
        return $opseg;
    }

    // Poziv funkcije calculatePerimeter i spremanje rezultata
    $opseg_pravokutnika = calculatePerimeter();

    // Ispisivanje rezultata
    echo "Opseg pravokutnika širine " . WIDTH . " i duljine " . LENGTH . " je: " . $opseg_pravokutnika;
?>