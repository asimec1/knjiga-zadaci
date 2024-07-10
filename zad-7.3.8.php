<!--
    8. Zadatak
    Napiši skriptu koja ispisuje 10 <div> jedan za drugim vodoravno, tako
    da je svaki sljedeci za 20px veći od prethodnog, počevši sa 40px, i različite boje. Širina je uvijek 40px.
    Za boje koristite array:
    $colors = array("red", "violet", "blue", "green", "yellow", "orange", "grey", "indigo", "gold", "silver");
-->

<?php
    $colors = array("red", "violet", "blue", "green", "yellow", "orange", "grey", "indigo", "gold", "silver");

    echo "<div style='display:flex; flex-direction: row;'>";
    for ($i = 1; $i <= 10; $i++)
    {
        $color  = $colors[$i - 1];
        $height = $i * 20;
        echo "<div style='width:40px; height: $height" . "px; background-color: $color;'></div>";
    }
    echo "</div>";
?>
