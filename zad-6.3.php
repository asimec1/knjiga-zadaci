<!--
    3. Zadatak
    Napišite PHP kod koji kreira asocijativno polje s podacima o autu:
    marka "Toyota", model "Corolla", godina "2015". Ispišite model i godinu auta.
-->

<?php
    // Kreiranje asocijativnog polja s podacima o autu
    $auto = array(
        "marka" => "Toyota",
        "model" => "Corolla",
        "godina" => "2015"
    );

    // Ispis modela i godine auta
    echo "Model auta: " . $auto["model"] . "<br>";
    echo "Godina auta: " . $auto["godina"] . "<br>";
?>