<!--
    2. Zadatak
    Napiši php skriptu koja će ispisati niz obojanih <div> elemenata u fibbonacijevom nizu oblika:

    1 crveni div, 1 plavi div, 2 crvena diva, 3 plava diva, 5 crvenih diva, 8 plavih diva...
    veličina <div> elementa neka bude 50px puta 50px.
-->

<?php
    $iterations = 6;
    $prvi       = 1;
    $drugi      = 1;
    $boja       = "crvena";
    for ($i = 0; $i < $iterations; $i++)
    {
        for ($j = 0; $j < $prvi; $j++)
        {
            if ($boja === "crvena") {
                echo "<div style='background-color: red; width:50px; height:50px;'></div>";
            }
            else {
                echo "<div style='background-color: blue; width:50px; height:50px;'></div>";
            }
        }
        $temp  = $prvi + $drugi;
        $prvi  = $drugi;
        $drugi = $temp;

        if ($boja === "crvena") {
            $boja = "plava";
        }
        else {
            $boja = "crvena";
        }
    }
?>
