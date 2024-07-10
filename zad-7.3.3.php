<!--
    3. Zadatak
    Ispiši kvadrate prvih 10 brojeva jedan ispod drugog pomoću <ol> i <li>
-->

<?php
    echo "<ol>";
    for ($i = 1; $i <= 10; $i++)
    {
        $square = $i * $i;
        echo "<li>$square</li>";
    }
    echo "</ol>";
?>
