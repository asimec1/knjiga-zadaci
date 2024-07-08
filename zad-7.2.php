<!--
    2. Zadatak
    Napiši php skriptu koja će u tablici ispisivati vrijednosti X i Y.
    X se svaki put povećava za jedan, a Y se računa po funkciji:
    Y = 3*X - 5
    Počnite od X = 0, te računajte sve dok je Y strogo manji od 21.
-->

<?php
   echo "<table>
    <tr>
        <td>X</td>
        <td>Y</td>
    </tr>";

    $x = 0;
    $y = 3 * $x - 5;
    
    while ($y < 21) {
        echo "<tr>
            <td>$x</td>
            <td>$y</td>
            </tr>";
        $x++;
        $y = 3 * $x - 5;
    }
    echo "</table>";
?>
