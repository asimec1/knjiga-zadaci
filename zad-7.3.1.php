<!--
    1. Zadatak
    Napiši php skriptu koja će ispisati prvih 10 neparnih brojeva.
-->

<?php
    for ($i = 1; $i <= 10; $i++)
    {
        if ($i % 2 === 1)
        {
            echo "<p>$i<p/>";
        }
    }
?>
