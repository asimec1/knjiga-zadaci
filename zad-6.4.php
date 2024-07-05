<!--
    4. Zadatak
    Napišite PHP kod koji kreira prazno polje, dodaje brojeve 5, 10 i 15 u polje, te ispisuje sve elemente polja.
-->

<?php
    // Kreiranje praznog polja
    $polje = array();

    // Dodavanje brojeva u polje
    $polje[] = 5;
    $polje[] = 10;
    $polje[] = 15;

    // Ispisivanje svih elemenata polja
    foreach ($polje as $element) {
        echo $element . "<br>";
    }
?>