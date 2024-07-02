<!--
    5. Zadatak
    Stvorite niz $brojevi koji sadrži vrijednosti 1, 2, 3, 4 i 5. Zatim stvorite varijablu $suma koja će zbrojiti
    sve vrijednosti iz niza $brojevi. Ispišite vrijednost varijable $suma.
-->

<?php
    // Stvaranje niza $brojevi koji sadrži vrijednosti 1, 2, 3, 4 i 5
    $brojevi = array(1, 2, 3, 4, 5);

    // Stvaranje varijable $suma koja će zbrojiti sve vrijednosti iz niza $brojevi
    $suma = array_sum($brojevi);

    // Ispisivanje vrijednosti varijable $suma
    echo "Zbroj svih brojeva u nizu je: " . $suma;
?>