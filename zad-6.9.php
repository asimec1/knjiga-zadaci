<!--
    9. Zadatak
    Stvorite višedimenzionalni niz $studenti koji sadrži informacije o tri studenta.
    Svaki student treba imati ime, prezime, godine, i prosjek.
    Zatim izračunajte prosječan prosjek ocjena svih studenata i ispišite ga.
-->

<?php
    // Stvaranje višedimenzionalnog niza $studenti s informacijama o studentima
    $studenti = array(
        array(
            "ime" => "Ana",
            "prezime" => "Horvat",
            "godine" => 22,
            "prosjek" => 4.5
        ),
        array(
            "ime" => "Ivan",
            "prezime" => "Kovačević",
            "godine" => 23,
            "prosjek" => 3.8
        ),
        array(
            "ime" => "Petra",
            "prezime" => "Novak",
            "godine" => 21,
            "prosjek" => 4.2
        )
    );

    // Izračun prosječnog prosjeka ocjena svih studenata
    $ukupni_prosjek = 0;
    $broj_studenata = count($studenti);

    foreach ($studenti as $student) {
        $ukupni_prosjek += $student['prosjek'];
    }

    $prosjek_ocjena = $ukupni_prosjek / $broj_studenata;

    // Ispisivanje prosječnog prosjeka ocjena
    echo "Prosjek ocjena svih studenata je: " . $prosjek_ocjena;
?>
