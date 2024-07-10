<!--
    1. Zadatak
    Napišite php skriptu koja ispisuje sve brojeve do 100 koji su djeljivi s 7
-->

<?php
    $x = 1;
    do
    {
        if ($x % 7 === 0)
        {
            echo "<p>$x</p>";
        }
        $x++;
    }
    while ($x < 100);
?>
