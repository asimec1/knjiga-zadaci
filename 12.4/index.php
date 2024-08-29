<!-- 
4.	Napravite stranicu koja će prikazivati popis knjiga s mogućnošću otvaranja detaljnih informacija o svakoj knjizi u modal prozoru. Stranica će koristiti HTML, CSS i Bootstrap za prikazivanje popisa i dizajniranje izgleda stranice, dok će PHP biti korišten za dinamičko generiranje popisa knjiga i upravljanje podacima o knjigama.
HTML/CSS/Bootstrap dio:
•	Kreirajte jednostavnu web stranicu s popisom knjiga.
•	Popis će imati grid layout gdje će se knjige prikazivati u karticama (cards).
•	Koristite Bootstrap za stilizaciju popisa i modal prozora.
PHP dio:
•	Koristite objektno orijentirani pristup za upravljanje podacima o knjigama.
•	Kreirajte klase, sučelja i osobine kako je navedeno.
•	Kreirajte PHP datoteku books.php koja će sadržavati klase za upravljanje knjigama.
•	Koristite sučelje BookInterface za definiranje metode getDetails.
•	Klasa Book će implementirati BookInterface i imati osobine kao što su naziv knjige, autor, opis, itd.
•	Klasa Library će upravljati kolekcijom objekata Book i generirati HTML za popis knjiga.
Kreirajte dodatne knjige u Library klasi kako biste prikazali različite knjige.
Stilizirajte kartice i modal prozor prema potrebi koristeći Bootstrap komponente.

-->
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popis knjiga</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php
                require 'books.php';
                $library = new Library();
                $library->displayBooks();
            ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="bookAuthor"></p>
                    <p id="bookDescription"></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('#bookModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            var bookTitle = button.data('title'); 
            var bookAuthor = button.data('author');
            var bookDescription = button.data('description');

            var modal = $(this);
            modal.find('.modal-title').text(bookTitle);
            modal.find('#bookAuthor').text('Autor: ' + bookAuthor);
            modal.find('#bookDescription').text(bookDescription);
        });
    </script>
</body>
</html>
