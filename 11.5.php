<!--
    5. Zadatak
    Napišite HTML kod za formu koja će sadržavati jedno polje s imenom i gumb za submit.
    Pomoću PHP superglobalne varijable $_POST ispišite ime korisnika koje će biti poslano preko forme.
-->

<form method="POST" action="">
    Ime: <input type="text" name="ime">
    <input type="submit" value="Pošalji">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ime'])) {
    $ime = $_POST['ime'];
    echo "Pozdrav, $ime!";
}
?>