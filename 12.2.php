<!--
    2. Zadatak
    Napravite klasu "Osoba" s privatnim svojstvima "ime", "prezime", i "godinaRodenja".
    Napravite konstruktor za klasu Osoba koji će inicijalizirati navedena svojstva.
    Napravite metode za dohvat (get) i postavljanje (set) vrijednosti za svako svojstvo.
    Napravite klasu "Student" koja nasljeđuje klasu "Osoba" i dodaje svojstvo "fakultet".
    Napravite konstruktor za klasu Student koji poziva konstruktor osnovne klase Osoba i inicijalizira dodatno svojstvo.
    Napravite metodu prikaziPodatke() koja će ispisivati sve podatke o studentu.
    Kreirajte nekoliko objekata klase Student i prikažite njihove podatke.
-->

<?php
    class Osoba {
        private $ime;
        private $prezime;
        private $godinaRodenja;

        public function __construct($ime, $prezime, $godinaRodenja) {
            $this->ime = $ime;
            $this->prezime = $prezime;
            $this->godinaRodenja = $godinaRodenja;
        }

        public function getIme() {
            return $this->ime;
        }

        public function setIme($ime) {
            $this->ime = $ime;
        }

        public function getPrezime() {
            return $this->prezime;
        }

        public function setPrezime($prezime) {
            $this->prezime = $prezime;
        }

        public function getgodinaRodenja() {
            return $this->godinaRodenja;
        }

        public function setgodinaRodenja($godinaRodenja) {
            $this->godinaRodenja = $godinaRodenja;
        }
    }

    class Student extends Osoba {
        private $fakultet;

        public function __construct($ime, $prezime, $godinaRodenja, $fakultet) {
            parent::__construct($ime, $prezime, $godinaRodenja);
            $this->fakultet = $fakultet;
        }

        public function getFakultet() {
            return $this->fakultet;
        }

        public function setFakultet($fakultet) {
            $this->fakultet = $fakultet;
        }

        public function prikaziPodatke() {
            echo "Ime: " . $this->getIme() . "<br>";
            echo "Prezime: " . $this->getPrezime() . "<br>";
            echo "Godina rođenja: " . $this->getgodinaRodenja() . "<br>";
            echo "Fakultet: " . $this->getFakultet() . "<br><br>";
        }
    }

    echo "<br><br>";

    // Kreiranje objekata klase Student
    $student1 = new Student("Ivan", "Horvat", 1998, "FER");
    $student2 = new Student("Ana", "Kovač", 2000, "FFZG");
    $student3 = new Student("Mirko", "Tušek", 2002, "TVZ");
    $student4 = new Student("David", "Vrčković", 2003, "TVZ");

    // Prikazivanje podataka o studentima
    $student1->prikaziPodatke();
    $student2->prikaziPodatke();
    $student3->prikaziPodatke();
    $student4->prikaziPodatke();
?>
