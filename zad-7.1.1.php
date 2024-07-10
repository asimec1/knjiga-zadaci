<!--
    1. Zadatak
    Napišite php skriptu koja ispisuje sve parne brojeve manje od 15
-->

<?php
    $i = 2;
    while ($i < 15)
    {
        echo "<p>$i</p>";
        $i += 2;
    }
?>
