<!--
    7. Zadatak
    Napišite php skriptu koja uzima broj X te potom ukoliko je on
    djeljiv s 7 -> množi ga s 3 i dodaje mu 2,
    inače ako je paran -> dijeli ga s 2 i oduzima 3,
    inače -> dodaj 12
    Ispišite X vrijednost u svakom koraku i ponavljajte sve dok je X manji od 200.
    Za početni X uzmite 4.
-->

<?php
    $x = 4;
    echo "<p>Početni X: $x</p>";
    while ($x < 200) {
        if ($x % 7 === 0)
        {
            $x = $x * 3 + 2;
        }
        else if ($x % 2 === 0)
        {
            $x = $x / 2 - 3;
        }
        else
        {
            $x += 12;
        }
        echo "<p>Vrijednost X: $x</p>";
    }
?>
