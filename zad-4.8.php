<!--
    8. Zadatak
    Napišite kod koji izračunava prosječnu ocjenu za studenta na temelju unesenih ocjena iz četiri predmeta. Nakon izračuna, ispišite poruku koja sadrži prosječnu ocjenu za studenta.
-->

<?php
    // Unos ocjena za četiri predmeta
    $ocjena_predmet1 = 4.5;
    $ocjena_predmet2 = 3.75;
    $ocjena_predmet3 = 5.0;
    $ocjena_predmet4 = 4.25;

    // Izračun prosječne ocjene
    $prosjek = ($ocjena_predmet1 + $ocjena_predmet2 + $ocjena_predmet3 + $ocjena_predmet4) / 4;

    // Ispis rezultata
    echo "Prosjek ocjena je: " . $prosjek;
?>
