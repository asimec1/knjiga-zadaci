<!--
    7. Zadatak
    Napišite php skriptu koja crta 255 div elemenata jedan do drugog.
    Širina diva treba biti 1px, visina 100px, a RGB boja se svaki sljedeći div
    treba povećati za 1 na sve tri vrijednosti RBG boje.
    PRIMJER:
    1. boja: rgb(0,0,0)
    2. boja: rgb(1,1,1)
    3. boja: rgb(2,2,2)
    Koristite display: flex; align-items: flex-end; flex-direction: row; kako bi bili vodoravno.
-->

<?php
    $x = 0;
    echo "<div style='display: flex; align-items: flex-end; flex-direction: row;'>";
    do
    {
        echo "<div style='height: 100px; width: 1px; background-color: rgb($x,$x,$x);'></div>";
        $x++;
    }
    while ($x <= 255);
    echo "</div>";
?>
