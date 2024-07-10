<!--
    4. Zadatak
    Ispiši zbroj brojeva do 50.
-->

<?php
    $x       = 1;
    $zbroj = 0;
    do
    {
        $zbroj += $x;
        $x++;
    }
    while ($x <= 50);
    echo "<p>Zbroj je $zbroj</p>";
?>
