<!--
    2. Zadatak
    Ispišite prvih 10 članova fibonaccijevog niza te izračunajte njihov zbroj.
-->

<?php
    $prvi   = 0;
    $drugi  = 1;
    $zbroj  = 0;
    $duzina = 0;
    do
    {
        $temp  = $drugi;
        $drugi = $prvi + $drugi;
        $prvi  = $temp;
        $duzina++;
        $zbroj += $prvi;
        echo "<p>$prvi</p>";
    }
    while ($duzina < 10);
    echo "<p>Zbroj prvih 10 članova je $zbroj</p>";
?>
