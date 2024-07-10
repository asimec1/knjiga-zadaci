<!--
    1. Zadatak
    Napišite php skriptu koja ispisuje pomoću foreach petlje brojeve iz niza jedan ispod drugog.
    Niz:
    $array = array(1, 5, 6, 8, 3, 4);
-->

<?php
    $array = array(1, 5, 6, 8, 3, 4);
    foreach ($array as $number)
    {
        echo "<p>$number</p>";
    }
?>
