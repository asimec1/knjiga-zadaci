<!--
    1. Zadatak
    Napravite formu za unos teksta koji će pomoću superglobalne varijable $_GET dohvatiti ime korisnika. 
    Napravite provjeru da li je varijabla deklarirana te ispišite njenu vrijednost. 
    Ako varijabla nije deklarirana ispišite „Niste upisali ime“.
-->



<?php
if (isset($_GET['ime'])) {
    $ime = $_GET['ime'];
    echo "Pozdrav, $ime!";
} else {
    echo "Niste upisali ime.";
}

?>


<form method="GET" action="">
    Ime: <input type="text" name="ime"><br>
    <input type="submit" value="Pošalji">
</form>