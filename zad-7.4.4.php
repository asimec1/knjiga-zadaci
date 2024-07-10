<!--
    4. Zadatak
    Napiši skriptu koja će iz niza ispisati samo brojeve koji su neparni i negativni.
    Niz:
    $array = array(3, -1, 6, -7, -3, 1);
-->

<?php
    $array = array(3, -1, 6, -7, -3, 1);
    foreach ($array as $number)
    {
        if ($number % 2 === -1)
        {
            echo "<p>$number</p>";
        }
    }
?>
