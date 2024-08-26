<!--
    4. Zadatak
    Napišite kod za otvaranje PHP sesije te u superglobalnu varijablu $_SESSION spremite ime korisnika.
    Ispišite ime korisnika iz sesije, odnosno grešku ukoliko ime nije postavljeno.
-->

<?php
    session_start();
    $_SESSION['korisnik'] = "David";

    if (isset($_SESSION['korisnik'])) {
        echo "Korisnik: " . $_SESSION['korisnik'];
    } else {
        echo "Session varijabla nije postavljena.";
    }
?>