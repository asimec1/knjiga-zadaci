<!--
    4. Zadatak
    Napiši skriptu koja izvodi operaciju nad X varijablom.
    Ako je X djeljiv s 8, prekini izvođenje.
    Inače ako je djeljiv s 3, dodaj 7.
    Inače dodaj 4.
    Počni s X = 3, te ispiši svaki korak. Prekini ako je X veći od 200.
    Ukoliko se petlja prekine jer je X djeljiv s 8 ispiši: "X je djeljivi sa 8."
-->

<?php
    $x = 3;
    echo "<p>Početna vrijednost X: $x</p>";
    while ($x < 200) {
        echo "<p>Vrijednost X: $x</p>";
        if ($x % 8 === 0) {
            echo "<p>$x je djeljiv sa 8.</p>";
            break;
        }
        else if ($x % 3 === 0) {
            $x += 7;
        }
        else {
            $x += 4;
        }
    }
?>
