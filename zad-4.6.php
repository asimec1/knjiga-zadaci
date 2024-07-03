<!--
    6. Zadatak
    Napišite kod koji će za dani iznos u eurima izračunati koliko to iznosi u kunama prema zadanoj tečajnoj stopi, te ispisati rezultat u formatu "X eura iznosi Y kuna po tečajnoj stopi Z."
-->

<?php
    // Ulazni podaci
    $iznos_u_eurima = 100; // primjer iznosa u eurima
    $tecajna_stopa = 7.5; // primjer tečajne stope

    // Izračun iznosa u kunama
    $iznos_u_kunama = $iznos_u_eurima * $tecajna_stopa;

    // Ispis rezultata
    echo $iznos_u_eurima . " eura iznosi " . $iznos_u_kunama . " kuna po tečajnoj stopi " . $tecajna_stopa . ".";
?>
