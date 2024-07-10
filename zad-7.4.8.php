<!--
    8. Zadatak
    Npiši php skriptu koja prolazi po nizu, te svaki element računa f(x) tako da je 
    f(x) = x**2 - 2*x + 3, te ukoliko je f(x) djeljiv s 3, ispišite crveni <div> element,
    inače ako je f(x) > 30, ispišite plavi <div> element, te inače ispišite zeleni
    <div> element. Svi <div> elementi moraju biti 50px * 50px;
    <div> elemente organizirajte u tablicu veličine 3 stupca, tako da ako prvi uvjet odgovara
    <div> postavite u prvi stupac, ako odgovara drugi uvjet onda u drugi stupac, a inače u treći stupac.
    U tablici svaki red odgovara jednom broju u nizu. 
    Niz:
    $array = array(2, 5, 3, 6, 8, 2);
-->

<?php
    $array = array(2, -8, -2, 6, 7, 1);
    echo "<table>";
    foreach ($array as $x)
    {
        $fx = $x ** 2 - 2 * $x + 3;
        echo "<tr>";
        if ($fx % 3 === 0)
        {
            echo "
            <td>
            <div style='background-color: red; width: 50px; height: 50px'><div>
            </td>
            <td></td>
            <td></td>";
        }
        else if ($fx > 30)
        {
            echo "
            <td></td>
            <td>
            <div style='background-color: blue; width: 50px; height: 50px'><div>
            </td>
            <td></td>";
        }
        else
        {
            echo "
            <td></td>
            <td></td>
            <td>
            <div style='background-color: green; width: 50px; height: 50px'><div>
            </td>";
        }
        echo "</tr>";
    }
?>
