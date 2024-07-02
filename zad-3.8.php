<!-- 
    8. Zadatak

    Napišite kod koji će obaviti sljedeće korake:
    Dodijelite vrijednost 10 varijabli a.
    Dodijelite varijabli b vrijednost koja je jednaka dvostrukoj vrijednosti varijable a.
    Dodijelite varijabli c vrijednost koja je jednaka kvadratu varijable b.
    Dodijelite varijabli d vrijednost koja je jednaka kvadratnom korijenu varijable c.
    Napravite novi string result koji kombinira sve vrijednosti varijabli a, b, c i d u obliku: "Vrijednosti varijabli su: a = {a}, b = {b}, c = {c}, d = {d}".
    Ispišite rezultat na ekran.
-->

<?php
    // 1. Dodjeljivanje vrijednosti 10 varijabli a
    $a = 10;

    // 2. Dodjeljivanje varijabli b vrijednost koja je jednaka dvostrukoj vrijednosti varijable a
    $b = 2 * $a;

    // 3. Dodjeljivanje varijabli c vrijednost koja je jednaka kvadratu varijable b
    $c = $b * $b;

    // 4. Dodjeljivanje varijabli d vrijednost koja je jednaka kvadratnom korijenu varijable c
    $d = sqrt($c);

    // 5. Kreiranje stringa result koji kombinira sve vrijednosti varijabli a, b, c i d
    $result = "Vrijednosti varijabli su: a = $a, b = $b, c = $c, d = $d";

    // 6. Ispis na ekran
    echo $result;
?>
