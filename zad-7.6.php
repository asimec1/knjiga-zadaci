<!--
    6. Zadatak
    Napišite php skriptu koja ispisuje prvih niz faktorijela.
    Ispis treba izgledati poput:
    1! = 1 = 1
    2! = 1*2 = 2
    3! = 1*2*3 = 6
    ...
    Treba ispisati sve faktorijele koji su manji od 7000.
-->

<?php
    $i        = 1;
    $multiply = "1";
    $fact     = 1;

    while ($fact < 7000) {
        echo "<p>$i! = $multiply = $fact</p>";
        $i++;
        $fact *= $i;
        $multiply = $multiply . "*$i";
    }
?>
