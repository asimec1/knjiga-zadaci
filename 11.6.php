<!--
    6. Zadatak
    Napišite HTML kod za formu za unos imena, emaila i poruke.
    Kada korisnik pošalje formu, potrebno je validirati unos koristeći $_POST superglobalnu varijablu tako da ime i poruka ne smiju biti prazne te email mora biti ispravan.
    Ako je validan unos, ispišite podatke iz forme, a grešku ukoliko je pogrešan.
-->

<form method="POST" action="">
    Ime: <input type="text" name="ime"><br>
    Email: <input type="email" name="email"><br>
    Poruka: <textarea name="poruka"></textarea><br>
    <input type="submit" value="Pošalji">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ime'], $_POST['email'], $_POST['poruka'])) {

    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $poruka = $_POST['poruka'];
    $greske = [];

    if (empty($ime)) {
        $greske[] = "Ime je obavezno.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $greske[] = "Neispravan email.";
    }
    if (empty($poruka)) {
        $greske[] = "Poruka je obavezna.";
    }

    if (empty($greske)) {
        echo "Poruka poslana. Podaci: <br> Ime: $ime <br> Email: $email <br> Poruka: $poruka <br>";
    } else {
        foreach ($greske as $greska) {
            echo "<p> $greska </p>";
        }
    }
}
?>