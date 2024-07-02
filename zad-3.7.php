<!-- 
    7. Zadatak

    Napišite kod koji će obaviti sljedeće korake:

    Dodijelite varijabli a logičku vrijednost true.
    Dodijelite varijabli b logičku vrijednost false.
    Dodijelite varijabli c logičku vrijednost koja je rezultat logičkog AND operatora između varijabli a i b.
    Dodijelite varijabli d logičku vrijednost koja je rezultat logičkog OR operatora između varijabli a i b.
    Dodijelite varijabli e logičku vrijednost koja je rezultat negacije varijable b.
    Napravite novi string result koji kombinira sve vrijednosti varijabli a, b, c, d i e u obliku: "Vrijednosti varijabli su: a = {a}, b = {b}, c = {c}, d = {d}, e = {e}".
    Ispišite rezultat na ekran.
-->

<?php
    // 1. Dodjeljivanje varijabli a logičku vrijednost true
    $a = true;

    // 2. Dodjeljivanje varijabli b logičku vrijednost false
    $b = false;

    // 3. Dodjeljivanje varijabli c logičku vrijednost koja je rezultat logičkog AND operatora između varijabli a i b
    $c = $a && $b;

    // 4. Dodjeljivanje varijabli d logičku vrijednost koja je rezultat logičkog OR operatora između varijabli a i b
    $d = $a || $b;

    // 5. Dodjeljivanje varijabli e logičku vrijednost koja je rezultat negacije varijable b
    $e = !$b;

    // 6. Kreiranje stringa result koji kombinira sve vrijednosti varijabli a, b, c, d i e
    $result = "Vrijednosti varijabli su: a = " . ($a ? 'true' : 'false') . ", b = " . ($b ? 'true' : 'false') . ", c = " . ($c ? 'true' : 'false') . ", d = " . ($d ? 'true' : 'false') . ", e = " . ($e ? 'true' : 'false');

    // 7. Ispis na ekran
    echo $result;
?>
