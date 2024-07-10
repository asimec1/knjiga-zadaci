<!--
    5. Zadatak
    Nacrtaj niz kvadrata(div) u kojem svaki kvadrat raste za 10 px prema gore.
    Obojaj ih plavo, neka zadnji bude 200px, a prvi 10px. Neka širina bude 10px.
    Koristite display: flex; align-items: flex-end; flex-direction: row; kako bi bili vodoravno.
-->

<?php
    $height = 10;
    echo "<div style='display: flex; align-items: flex-end; flex-direction: row;'>";
    do
    {
        echo "<div style='height: $height"."px; width:10px; background-color: blue'></div>";
        $height += 10;
    }
    while ($height <= 200);
    echo "</div>";
?>
