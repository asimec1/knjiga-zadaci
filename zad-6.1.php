<!--
    1. Zadatak
    Napišite PHP kod koji kreira polje s imenima voća: "jabuka", "banana", "trešnja". Ispišite prvo i treće ime iz polja.
-->

<?php
    // Kreiranje polja s imenima voća
    $voce = array("jabuka", "banana", "trešnja");

    // Ispis prvog i trećeg elementa polja
    echo "Prvo ime voća: " . $voce[0] . "<br>";
    echo "Treće ime voća: " . $voce[2] . "<br>";
?>