<!--
    6. Zadatak
    Ispiši sve brojeve koji su djeljivi s 7.
    Prestani ispisivati kada dođeš do broja koji je djeljiv s 7 i 17, ili ako dođeš do 150.
-->

<?php
    $x = 1;

    do
    {
        if ($x % 7 === 0)
        {
            echo "<p>$x</p>";
            if ($x % 17 === 0)
            {
                echo "<p>$x je djeljiv s 7 i 17</p>";
                break;
            }
        }
        $x++;
    }
    while ($x < 150);
?>
