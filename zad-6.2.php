<!--
    2. Zadatak
    Napišite PHP kod koji kreira asocijativno polje s podacima o studentu:
    "ime" => "Ana", "prezime" => "Horvat", "godine" => 22. Ispišite sve informacije o studentu.
-->

<?php
    // Kreiranje asocijativnog polja s podacima o studentu
    $student = array(
        "ime" => "Ana",
        "prezime" => "Horvat",
        "godine" => 22
    );

    // Ispis svih informacija o studentu
    echo "Ime: " . $student["ime"] . "<br>";
    echo "Prezime: " . $student["prezime"] . "<br>";
    echo "Godine: " . $student["godine"] . "<br>";
?>