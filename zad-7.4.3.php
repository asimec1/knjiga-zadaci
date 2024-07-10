<!--
    3. Zadatak
    Napiši php skriptu koja prolazi kroz niz te ispisuje crvene <div> elemente
    onoliko puta koliki je broj u nizu.
    Redove <div> elemenata ispisujte jedan ispod drugog, svaki div je 40px * 40px.
    Niz:
    $array = array(2, 7, 3, 4, 9);
-->

<?php
    $array = array(2, 7, 3, 4, 9);
    foreach ($array as $rowLength)
    {
        echo "<div style='display: flex'>";
        for ($i = 0; $i < $rowLength; $i++)
        {
            echo "<div style='background-color: red; width: 40px; height: 40px'></div>";
        }
        echo "</div>";
    }
?>
