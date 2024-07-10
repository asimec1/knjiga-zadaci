<!--
    3. Zadatak
    Ispišite svaki parni broj do 50.
-->

<?php
    $x = 1;
    do {
        if ($x % 2 === 0)
        {
            echo "<p>$x</p>";
        }
        $x++;
    }
    while ($x <= 50);
?>
