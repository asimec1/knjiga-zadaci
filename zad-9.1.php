<!--
    1. Zadatak
    Definiraj konstantu TAX_RATE s vrijednošću 25% i napiši funkciju calculateTax koja prima iznos i vraća iznos s porezom.
    Ispiši iznos s porezom za iznos vrijednosti 100.
-->

<?php
    // Definiranje konstante TAX_RATE
    define("TAX_RATE", 0.25);

    // Definicija funkcije calculateTax koja prima iznos i vraća iznos s porezom
    function calculateTax($iznos) {
        $porez = $iznos * TAX_RATE;
        $iznos_s_porezom = $iznos + $porez;
        return $iznos_s_porezom;
    }

    // Testiranje funkcije calculateTax za iznos 100
    $iznos = 100;
    $iznos_s_porezom = calculateTax($iznos);

    // Ispisivanje rezultata
    echo "Iznos $iznos s porezom od " . (TAX_RATE * 100) . "% iznosi: " . $iznos_s_porezom;
?>