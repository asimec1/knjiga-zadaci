<!--
    4. Zadatak
    Napišite php skriptu koja ispisuje trokut pomoću znaka *, visine 6 znakova.
    Izgled trokuta:
    *
    **
    ***
    ****
    *****
    ******
-->

<?php
    for ($i = 1; $i <= 6; $i++)
    {
        echo "<p>";
        for ($j = 0; $j < $i; $j++)
        {
            echo "*";
        }
        echo "</p>";
    }
?>
