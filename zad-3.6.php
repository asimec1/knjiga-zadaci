<!--
    6. Zadatak
    Napišite PHP kod koji će stvoriti varijable $ime, $prezime i $godine te im dodijeliti vrijednosti.
    Zatim stvorite varijablu $osoba koja će kombinirati ove tri varijable u jedan string u formatu "Ime Prezime, Godine: 25".
    Ako su $godine veće od 18, dodajte tekst " - Odrasla osoba" na kraj stringa. Ispišite vrijednost varijable $osoba.
-->

<?php
    // Definiranje varijabli $ime, $prezime i $godine
    $ime = "Ana";
    $prezime = "Horvat";
    $godine = 25;

    // Stvaranje varijable $osoba koja kombinira ime, prezime i godine u odgovarajućem formatu
    $osoba = "$ime $prezime, Godine: $godine";

    // Dodavanje teksta "- Odrasla osoba" ako su godine veće od 18
    if ($godine > 18) {
        $osoba .= " - Odrasla osoba";
    }

    // Ispisivanje vrijednosti varijable $osoba
    echo $osoba;
?>