<!--
    5. Zadatak
    Napišite PHP kod koji kreira dvodimenzionalno polje s ocjenama učenika.
    Polje treba sadržavati ime učenika i njegove ocjene. Ispišite sve ocjene za učenika "Ana".
-->

<?php
    // Kreiranje dvodimenzionalnog asocijativnog polja s ocjenama učenika
    $ocene = array(
        "Ana" => array(
            "matematika" => 4,
            "hrvatski" => 5,
            "povijest" => 3
        ),
        "Ivan" => array(
            "matematika" => 5,
            "hrvatski" => 4,
            "povijest" => 5
        ),
        "Marija" => array(
            "matematika" => 3,
            "hrvatski" => 5,
            "povijest" => 4
        )
    );

    // Ispis svih ocjena za učenika "Ana"
    echo "Ocjene za učenicu Anu:<br>";
    foreach ($ocene["Ana"] as $predmet => $ocjena) {
        echo "Predmet: " . $predmet . ", Ocjena: " . $ocjena . "<br>";
    }
?>