<!--
    5. Zadatak
    Napišite kod koji će za dani broj godina izračunati koliko je to ukupno mjeseci i dana, te ispisati rezultat u formatu "X godina ima Y mjeseci i Z dana."
-->

<?php
    // Ulazni podaci (broj godina)
    $godine = 25;

    // Izračun mjeseci i dana
    $mjeseci = $godine * 12;
    $dani = $godine * 365;

    // Prebacivanje dana u mjeseci i dane
    $preostali_dani = $dani % 365;
    $preostali_mjeseci = ($dani - $preostali_dani) / 30;

    // Ispis rezultata
    echo $godine . " godina ima " . $mjeseci . " mjeseci i " . $preostali_dani . " dana.";
?>
