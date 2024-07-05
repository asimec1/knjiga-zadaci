<!--
    7. Zadatak
    Kreirajte višedimenzionalno polje koje sadrži informacije o obitelji od 3 člana. Svaki od 3 člana obitelji treba imati svoje ime, dob,
    i ugniježđeno polje s imenima i dobi svoje djece. Ispišite sve informacije o članovima obitelji i njihovoj djeci.
-->

<?php
    // Kreiranje višedimenzionalnog polja s informacijama o obitelji
    $obitelj = array(
        array(
            "ime" => "Ana",
            "dob" => 35,
            "djeca" => array(
                array("ime" => "Marko", "dob" => 10),
                array("ime" => "Petra", "dob" => 8)
            )
        ),
        array(
            "ime" => "Ivan",
            "dob" => 40,
            "djeca" => array(
                array("ime" => "Josip", "dob" => 12),
                array("ime" => "Marina", "dob" => 15),
                array("ime" => "Ana", "dob" => 18)
            )
        ),
        array(
            "ime" => "Marija",
            "dob" => 38,
            "djeca" => array()
        )
    );

    // Ispis svih informacija o članovima obitelji i njihovoj djeci
    foreach ($obitelj as $clan) {
        echo "Ime: " . $clan["ime"] . ", Dob: " . $clan["dob"] . "<br>";
        if (!empty($clan["djeca"])) {
            echo "Djeca:<br>";
            foreach ($clan["djeca"] as $dijete) {
                echo "- Ime: " . $dijete["ime"] . ", Dob: " . $dijete["dob"] . "<br>";
            }
        } else {
            echo "Nema djece.<br>";
        }
        echo "<br>";
    }
?>