<!--
    7. Zadatak
    Ispišite korisnike jedan za drugim u tablici tako da koristite vrijednosti 
    iz niza za korisnička imena. Jedan stupac neka bude id koji je index iz tablice,
    drugi korisničko ime, treći neka budu <input> element zipa 'button' na kojem piše "Obriši".
    Niz:
    $array = array("ivani", "markom", "korisnik", "leoz");
-->

<?php
    $array = array("ivani", "markom", "korisnik", "leoz");
    echo "<table>";
    $index = 0;
    foreach ($array as $username)
    {
        echo "<tr>
                <td>$index</td>
                <td>$username</td>
                <td><input type='button' value='Obriši' /></td>
              </tr>";
        $index++;
    }
    echo "</table>";
?>
