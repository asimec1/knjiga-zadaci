<!--
    5. Zadatak
    Napišite php skriptu koja ispisuje sve brojeve od 25 do 99 koji su djeljivi s 7 ili im je zbroj znamenaka 10.
-->

<?php
    for ($i = 25; $i <= 99; $i++)
    {
        $zbroj = $i % 10 + (int)($i / 10);
        if ($i % 7 === 0 || $zbroj === 10)
        {
            echo "<p>$i</p>";
        }
    }
?>
