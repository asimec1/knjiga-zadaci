<!--
    5. Zadatak
    Napišite php skriptu koja računa umnožak parnih brojeva u nizu.
    Niz:
    $array = array(5, 4, 6, -3, 2, 3);
-->

<?php
    $array = array(5, 4, 6, -3, 2, 3);
    $umnozak = 1;
    foreach ($array as $x)
    {
        if ($x % 2 === 0) {
            $umnozak *= $x;
        }
        $x++;
    }
    echo "<p>Umnožak je $umnozak</p>";
?>
