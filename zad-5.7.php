<!--
    7. Zadatak
    Napišite PHP skriptu koja koristi switch naredbu za provjeru odabranog vozila i ispisuje odgovarajuću poruku.
    Ako korisnik odabere "auto", ispišite "Odabrali ste auto.", ako odabere "motor", ispišite "Odabrali ste motor.",
    ako odabere "bicikl", ispišite "Odabrali ste bicikl.", u suprotnom ispišite "Nepoznat odabir.".
-->

<?php
    // Definiranje varijable za odabrano vozilo (može biti 'auto', 'motor' ili 'bicikl')
    $odabir = 'motor'; // Primjer odabira, može se promijeniti prema potrebi

    // Provjera odabranog vozila korištenjem switch naredbe
    switch ($odabir) {
        case 'auto':
            echo "Odabrali ste auto.";
            break;
        case 'motor':
            echo "Odabrali ste motor.";
            break;
        case 'bicikl':
            echo "Odabrali ste bicikl.";
            break;
        default:
            echo "Nepoznat odabir.";
    }
?>