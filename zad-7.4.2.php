<!--
    2. Zadatak
    Iz niza ispišite samo brojeve koji nisu djeljivi s 3
    Niz:
    $numbers = array(1, 4, 6, 7, -3, 4);
-->

<?php
    $numbers = array(1, 4, 6, 7, -3, 4);
    foreach ($numbers as $num)
    {
        if ($num % 3 !== 0)
        {
            echo "<p>$num</p>";
        }
    }
?>
