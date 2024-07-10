<!--
    3. Zadatak
    Ispišite brojeve od 1 do 15 bez da ispišete brojeve dijeljive s 4
    Napomena: Za preskakanje ispisa koristite continue
-->

<?php
    $i = 1;
    while ($i <= 15) {
        if ($i % 4 === 0)
        {
            $i++;
            continue;
        }
        echo "<p>$i</p>";
        $i++;
    }
?>
