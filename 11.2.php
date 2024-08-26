<!--
    2. Zadatak
    Napišite kod koji će pomoću superglobalne varijable $_SERVER dohvatiti putanju trenutne datoteke.
    Ispišite putanju.
-->

<?php
    $ip_adresa = $_SERVER['SCRIPT_NAME'];
    echo "Putanja trenutne datoteke: $ip_adresa";
?>