<?php
// books.php

interface BookInterface {
    public function getDetails(): array;
}

class Book implements BookInterface {
    private string $title;
    private string $author;
    private string $description;

    public function __construct(string $title, string $author, string $description) {
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getDetails(): array {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'description' => $this->description,
        ];
    }
}

class Library {
    private array $books = [];

    public function __construct() {
        $this->addBook(new Book('Ana Karenjina', 'Lav Tolstoj', 'Tragična priča o strasti, ljubavi i preljubu u ruskom visokom društvu, s naglaskom na sukob između osobnih želja i društvenih normi.'));
        $this->addBook(new Book('Veliki Gatsby', 'F. Scott Fitzgerald', 'Roman koji oslikava američki san i dekadenciju 1920-ih godina kroz priču o bogatom i misterioznom Jayu Gatsbyju.'));
        $this->addBook(new Book('1984', 'George Orwell', 'Distopijski roman koji istražuje opasnosti totalitarizma, nadzora i manipulacije u fiktivnom društvu pod strogim režimom.'));
        $this->addBook(new Book('Lovac u žitu', 'J.D. Salinger', 'Roman o tinejdžeru Holdenu Caulfieldu i njegovim egzistencijalnim krizama, kritika društva i odrastanja.'));
        $this->addBook(new Book('Gospodar prstenova: Prstenova družina', 'J.R.R. Tolkien', 'Prvi dio epske fantastične trilogije o borbi za moć između dobra i zla u izmišljenom svijetu Međuzemlja.'));
        $this->addBook(new Book('Bjesovi', 'Fjodor Dostojevski', 'Roman koji istražuje političke, socijalne i filozofske teme kroz sudbinu likova uhvaćenih u kaos nihilizma i radikalizma.'));
        $this->addBook(new Book('Mali princ', 'Antoine de Saint-Exupéry', 'Bezvremenska priča o dječaku s druge planete, koja istražuje teme ljubavi, prijateljstva i smisla života kroz simboliku i alegoriju.'));
        $this->addBook(new Book('Don Quijote', 'Miguel de Cervantes', 'Priča o plemiću koji, opijen vitezovskim romanima, kreće na put kao vitez lutalica, donoseći satiru na tadašnje društvo i književnost.'));
        $this->addBook(new Book('Putovanje na kraj noći', 'Louis-Ferdinand Céline', 'Roman koji prati beskompromisno putovanje glavnog lika kroz rat, kolonijalizam i siromaštvo, uz mračnu, pesimističnu perspektivu.'));
        $this->addBook(new Book('Alkemičar', 'Paulo Coelho', 'Inspirativna priča o pastiru Santiagu koji kreće na putovanje kako bi pronašao blago, učeći pritom važnost slijeđenja svojih snova.'));
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function displayBooks() {
        foreach ($this->books as $book) {
            $details = $book->getDetails();
            echo '<div class="col-lg-4 col-md-6 mb-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $details['title'] . '</h5>';
            echo '<p class="card-text">Autor: ' . $details['author'] . '</p>';
            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal" data-title="' . $details['title'] . '" data-author="' . $details['author'] . '" data-description="' . $details['description'] . '">Više informacija</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}
?>
