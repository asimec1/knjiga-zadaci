<?php
    require 'funkcije.php';

    // Inicijalizacija popisa proizvoda
    $proizvodi = [];

    // Dodaj nekoliko proizvoda
    dodaj_proizvod("Kruh", 50, $proizvodi);
    dodaj_proizvod("Mlijeko", 100, $proizvodi);

    // Prikaz svih proizvoda
    prikazi_proizvode($proizvodi);
?>
