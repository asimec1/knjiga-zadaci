<!--
    8. Zadatak
    Napišite PHP kod koji kreira dvodimenzionalno polje s podacima o proizvoljnim proizvodima. Svaki proizvod treba sadržavati naziv,
    cijenu i dostupnost. Stvorite 6 proizvoda. Ispišite sve proizvode čija je cijena manja od 200 eur.
-->

<?php
// Kreiranje dvodimenzionalnog polja s podacima o proizvodima
$proizvodi = array(
    array("naziv" => "Laptop", "cijena" => 600, "dostupnost" => true),
    array("naziv" => "Mikrovalna pećnica", "cijena" => 100, "dostupnost" => false),
    array("naziv" => "Televizor", "cijena" => 380, "dostupnost" => true),
    array("naziv" => "Štapni usisavač", "cijena" => 20, "dostupnost" => true),
    array("naziv" => "Mobilni telefon", "cijena" => 300, "dostupnost" => false),
    array("naziv" => "Mikser", "cijena" => 7, "dostupnost" => true),
);

// Ispis svih proizvoda čija je cijena manja od 200 eur
echo "Proizvodi čija je cijena manja od 200 EUR:<br>";
foreach ($proizvodi as $proizvod) {
    if ($proizvod["cijena"] < 200) {
        echo "Naziv: " . $proizvod["naziv"] . ", Cijena: " . $proizvod["cijena"] . " EUR, Dostupnost: " . ($proizvod["dostupnost"] ? "Dostupan" : "Nedostupan") . "<br>";
    }
}
?>