<!--
    5. Zadatak
    Ispišite umnožak svih brojeva do 25 djeljivih s 7
-->

<?php
    $x       = 1;
    $umnozak = 1;
    while ($x < 25)
    {
        if ($x % 7 === 0)
        {
            $umnozak *= $x;
        }
        $x++;
    }
    echo "<p>Umnožak je $umnozak</p>";
?>
