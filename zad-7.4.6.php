<!--
    6. Zadatak
    Prođite kroz niz i ispišite samo proste brojeve u obliku: "X je prosti broj".
    Niz:
    $array = array(3, 8, 9, 11, 23, 6);
    Napomena: koristite for i foreach.
-->

<?php
    $array = array(3, 8, 9, 11, 23, 6);
    foreach ($array as $x)
    {
        $prost = true;
        for ($i = 2; $i < $x; $i++)
        {
            if ($x % $i === 0)
            {
                $prost = false;
            }
        }
        if ($prost)
        {
            echo "<p>$x je prosti broj</p>";
        }
    }
?>
