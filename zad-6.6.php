<!--
    6. Zadatak
    Napišite PHP kod koji kreira višedimenzionalno polje za raspored nastave za ponedjeljak i utorak.
    Svaki predmet treba sadržavati ime predmeta, dan i vrijeme. Ispišite raspored za ponedjeljak.
-->

<?php
    // Kreiranje višedimenzionalnog polja za raspored nastave
    $raspored = array(
        "ponedjeljak" => array(
            array(
                "predmet" => "Matematika",
                "vrijeme" => "8:00",
            ),
            array(
                "predmet" => "Hrvatski jezik",
                "vrijeme" => "10:00",
            ),
            array(
                "predmet" => "Povijest",
                "vrijeme" => "12:00",
            ),
        ),
        "utorak" => array(
            array(
                "predmet" => "Fizika",
                "vrijeme" => "9:00",
            ),
            array(
                "predmet" => "Engleski jezik",
                "vrijeme" => "11:00",
            ),
        ),
    );

    // Ispis rasporeda za ponedjeljak
    echo "Raspored za ponedjeljak:<br>";
    foreach ($raspored["ponedjeljak"] as $cas) {
        echo "Predmet: " . $cas["predmet"] . ", Vrijeme: " . $cas["vrijeme"] . "<br>";
    }
?>