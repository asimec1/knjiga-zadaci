<!--
    4. Zadatak
    Definiraj konstantu DISCOUNT s vrijednošću 10% i funkciju applyDiscount koja će vratiti iznos 
    s popustom. Ispiši cijenu s popustom za proizvod koji košta 50.
-->

<?php
    // Definiranje konstante DISCOUNT
    define("DISCOUNT", 0.1);

    // Definicija funkcije applyDiscount koja prima cijenu i vraća cijenu s popustom
    function applyDiscount($cijena) {
        $cijena_s_popustom = $cijena - ($cijena * DISCOUNT);
        return $cijena_s_popustom;
    }

    // Poziv funkcije applyDiscount za cijenu 50 i spremanje rezultata
    $cijena = 50;
    $cijena_s_popustom = applyDiscount($cijena);

    // Ispisivanje rezultata
    echo "Cijena proizvoda od $cijena s popustom od " . (DISCOUNT * 100) . "% iznosi: " . $cijena_s_popustom;
?>