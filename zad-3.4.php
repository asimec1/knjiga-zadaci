<!--
    4. Zadatak
    Stvorite dvije varijable $jeLjetnoVrijeme i $jeVikend te im dodijelite vrijednosti true i false.
    Stvorite varijablu $moguNaOdmor koja će biti true ako su obje varijable true, inače će biti false.
    Ispišite vrijednost varijable $moguNaOdmor.
-->

<?php
    // Stvaranje varijabli $jeLjetnoVrijeme i $jeVikend i dodjeljivanje vrijednosti
    $jeLjetnoVrijeme = true;
    $jeVikend = false;

    // Stvaranje varijable $moguNaOdmor koja će biti true ako su obje varijable true, inače false
    $moguNaOdmor = ($jeLjetnoVrijeme && $jeVikend);

    // Ispisivanje vrijednosti varijable $moguNaOdmor
    if ($moguNaOdmor) {
        echo "Mogu na odmor!";
    } else {
        echo "Ne mogu na odmor.";
    }
?>