<?php
    // Funkcija za dodavanje proizvoda
    function dodaj_proizvod($naziv, $kolicina, &$proizvodi) {
        $proizvodi[] = [
            'naziv' => $naziv,
            'kolicina' => $kolicina
        ];
    }

    // Funkcija za prikaz svih proizvoda
    function prikazi_proizvode($proizvodi) {
        foreach ($proizvodi as $proizvod) {
            echo "Naziv: " . htmlspecialchars($proizvod['naziv']) . ", Količina: " . htmlspecialchars($proizvod['kolicina']) . "<br>";
        }
    }
?>
