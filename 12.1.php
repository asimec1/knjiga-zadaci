<!--
    1. Zadatak
    Napravite klasu "Knjiga" s privatnim svojstvima "naslov", "autor", "godinaIzdanja" i "brojStranica".
    Napravite konstruktor koji će inicijalizirati navedena svojstva.
    Napravite metode za dohvat (get) i postavljanje (set) vrijednosti za svako svojstvo.
    Napravite metodu prikaziPodatke() koja će ispisivati sve podatke o knjizi.
    Kreirajte nekoliko objekata klase Knjiga i prikažite njihove podatke.
-->

<?php
    class Knjiga {
        private $naslov;
        private $autor;
        private $godinaIzdanja;
        private $brojStranica;

        public function __construct($naslov, $autor, $godinaIzdanja, $brojStranica) {
            $this->naslov = $naslov;
            $this->autor = $autor;
            $this->godinaIzdanja = $godinaIzdanja;
            $this->brojStranica = $brojStranica;
        }

        public function getNaslov() {
            return $this->naslov;
        }

        public function setNaslov($naslov) {
            $this->naslov = $naslov;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getGodinaIzdanja() {
            return $this->godinaIzdanja;
        }

        public function setGodinaIzdanja($godinaIzdanja) {
            $this->godinaIzdanja = $godinaIzdanja;
        }

        public function getBrojStranica() {
            return $this->brojStranica;
        }

        public function setBrojStranica($brojStranica) {
            $this->brojStranica = $brojStranica;
        }

        public function prikaziPodatke() {
            echo "Naslov: " . $this->naslov . "<br>";
            echo "Autor: " . $this->autor . "<br>";
            echo "Godina izdanja: " . $this->godinaIzdanja . "<br>";
            echo "Broj stranica: " . $this->brojStranica . "<br><br>";
        }
    }

    echo "<br><br>";

    // Kreiranje objekata klase Knjiga
    $knjiga1 = new Knjiga("Mali princ", "Antoine de Saint-Exupéry", 1943, 96);
    $knjiga2 = new Knjiga("Zločin i kazna", "Fjodor Dostojevski", 1866, 671);

    // Prikazivanje podataka o knjigama
    $knjiga1->prikaziPodatke();
    $knjiga2->prikaziPodatke();
?>