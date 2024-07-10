<!--
    8. Zadatak
    Ispiši faktorijel broja 20.
    Izračunajte koliko taj broj ima dvojki.
-->

<?php
    $x       = 2;
    $umnozak = 1;
    do
    {
        $umnozak *= $x;
        $x++;
    }
    while ($x <= 20);
    echo "<p>Umnožak je $umnozak</p>";

    $dvojke = 0;
    do
    {
        if ($umnozak % 10 === 2)
        {
            $dvojke++;
        }
        $umnozak = (int)($umnozak / 10);
    }
    while ($umnozak > 0);
    echo "<p>U broju se nalazi $dvojke dvojke.</p>";
?>
