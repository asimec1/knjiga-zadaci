<!--
    3. Zadatak
    Napišite kod koji će spremati broj vaših posjeta na stranicu pomoću kolačića (engl. cookie).
    Pomoću superglobalne varijable $_COOKIE dohvatite vrijednost te ju ispišite.
-->

<?php
    if (isset($_COOKIE['posjeta'])) {
        $posjeta = $_COOKIE['posjeta'] + 1;
    } else {
        $posjeta = 1;
    }

    setcookie("posjeta", $posjeta, time() + 60 * 60 * 24 * 30, "/");

    echo "<p>Broj vaših posjeta: $posjeta</p>";

?>