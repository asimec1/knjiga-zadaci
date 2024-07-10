<!--
    8. Zadatak
    Pomoću php skripte nacrtajte stupičasti graf. Svaki stup grafa treba bit za 1.2 puta veći od prethodnog.
    Stupce prestanite crtat kada visina pređe 400px. Neka širina stupaca bude 20px a boja crvena.
    Početna visina neka bude 30px, a stupac neka bude <div> element u kojem piše redni broj stupca.
    Koristite display: flex; flex-direction: row; align-items: end za ispravan izgled grafa.
-->

<?php
    $h    = 20;
    $broj = 1;
    echo "<div style='display: flex; flex-direction: row; align-items: end'>";
    while ($h < 400)
    {
        echo "<div style='background-color: red; width: 30px; height: $h" . "px'>$broj</div>";
        $h *= 1.2;
        $broj++;
    }
    echo "</div>";
?>
