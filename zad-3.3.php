<!--
    3. Zadatak
    Stvorite dvije varijable $broj1 i $broj2 te im dodijelite vrijednosti 15 i 30. Zatim stvorite varijablu $zbroj koja će
    sadržavati zbroj ovih dvaju brojeva. Ispišite vrijednost varijable $zbroj.
-->

<?php
    // Stvaranje varijabli $broj1 i $broj2 i dodjeljivanje vrijednosti
    $broj1 = 15;
    $broj2 = 30;

    // Stvaranje varijable $zbroj koja sadrži zbroj $broj1 i $broj2
    $zbroj = $broj1 + $broj2;

    // Ispisivanje vrijednosti varijable $zbroj
    echo "Zbroj brojeva $broj1 i $broj2 je: " . $zbroj;
?>