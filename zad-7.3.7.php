<!--
    7. Zadatak
    Napišite php skriptu koja generira kućice koje predstavljaju linkove na članke.
    Svaki red treba sadržavati 3 kućice, i ukupno treba biti 8 članka.
    Svaka kućica sadržava crveni <div> element visine 200px, koji predstavlja prostor za sliku,
    naslov <h3> koji glasi "Naslov X" te opis <h4> koji glasi "Opis X", s time da je X redni broj članka.
    Širina članka je proizvoljna, te se svi članci moraju nalaziti u <section> elementu širine 900px centriranom u sredini stranice.

    Napomena: Redove napravite pomoću display: flex; justify-content: space-between; flex-wrap: wrap;

    Dodatno: smislite kako bi rješili problem kada imamo 2 članka u redu (Članci su na ni trebali biti jedan do drugog, bez razmaka u sredini)
-->

<?php
    $numOfArticles = 8;
    echo "<section style='display: flex; justify-content: space-between; width: 900px; margin: 0 auto; flex-wrap: wrap;'>";
    for ($i = 1; $i <= $numOfArticles; $i++)
    {
        echo "<div style='height:400px; width:270px; display: flex; flex-direction: column'>
                    <div style='height:200px; background-color: red'></div>
                    <h3>Naslov $i</h3>
                    <h4>Opis $i</h4>
                </div>";
    }
    echo "</section>";

    echo "<hr/>";
    //dodatno
    $numOfArticles = 8;
    echo "<section style='display: flex; justify-content: space-between; width: 900px; margin: 0 auto; flex-wrap: wrap;'>";
    for ($i = 1; $i <= $numOfArticles; $i++)
    {

        if ($i % 3 === 2 && $numOfArticles - $i === 0)
        {
            $margin = 315;    //270 + 45
            echo "<div style='height:400px; width:270px; display: flex; flex-direction: column; margin-right: $margin" . "px'>";
        }
        else
        {
            echo "<div style='height:400px; width:270px; display: flex; flex-direction: column;'>";
        }
        echo "<div style='height:200px; background-color: red'></div>
                <h3>Naslov $i</h3>
                <h4>Opis $i</h4>
                </div>";
    }
    echo "</section>"
?>
