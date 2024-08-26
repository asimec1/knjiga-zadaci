<!--
    3. Zadatak
    Napravite novu datoteku pod nazivom "varijable.php" unutar foldera "skripte".
    Unutar "varijable.php" napišite dvije varijable i postavite ih na proizvoljne vrijednosti.
    Unutar "index.php" uključite datoteku "varijable.php" pomoću naredbe require te ispišite obje varijable.
    Potrebno je ispisati tekst "2 PHP programiranje"
-->
<?php
    require_once "skripte/varijable.php";
    echo $var1 . $var2;
?>