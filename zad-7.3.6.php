<!--
    6. Zadatak
    Ispiši pomoću for petlje i <table> elementa šahovsku tablicu tako da prva ćelija bude žuta, a druga crna.
    Polja  se trebaju izmjenjivati kao na šahovskoj ploči.
    Dodatno: Riješi zadatak pomoću jedne for petlje.
-->

<?php
    $prviBijeli = 1;
    for ($i = 1; $i < 9; $i++)
    {
        echo "<div style='display:flex; flex-direction: row'>";
        $prviBijeli = $i % 2;

        for ($j = 0; $j < 8; $j++)
        {
            if ($j % 2 === $prviBijeli)
            {
                echo "<div style ='width: 20px; height:20px; background-color: black;' ></div>";
            }
            else
            {
                echo "<div style ='width: 20px; height:20px; background-color: yellow;'></div>";
            }

        }
        echo "</div>";
    }

    echo "<br/>";

    //s jednom for petljom
    $bijeli = true;
    echo "<div style='display:flex; flex-direction: row'>";
    for ($i = 1; $i <= 64; $i++)
    {
        if ($bijeli)
        {
            echo "<div style ='width: 20px; height:20px; background-color: yellow;'></div>";
        }
        else
        {
            echo "<div style ='width: 20px; height:20px; background-color: black;'></div>";
        }
        if ($i % 8 === 0)
        {
            echo "</div>";
            echo "<div style='display:flex; flex-direction: row'>";
        }
        else
        {
            $bijeli = !$bijeli;
        }
    }
    echo "</div>";
?>
