<!--
3.	Napravite stranicu koja će prikazivati galeriju slika s mogućnošću otvaranja svake slike u modal prozoru. Stranica će koristiti HTML, CSS i Bootstrap za prikazivanje slika i dizajniranje izgleda stranice, dok će PHP biti korišten za dinamičko generiranje galerije i upravljanje slikama.
HTML/CSS/Bootstrap dio:
•	Kreirajte jednostavnu web stranicu s galerijom slika.
•	Galerija će imati grid layout gdje će se slike prikazivati u redovima i stupcima.
•	Koristite Bootstrap za stilizaciju galerije i modal prozora.
PHP dio:
•	Koristite objektno orijentirani pristup za upravljanje slikama.
•	Kreirajte klase, sučelja i osobine kako je navedeno.
•	Kreirajte PHP datoteku gallery.php koja će sadržavati klase za upravljanje slikama.
•	Koristite sučelje ImageInterface za definiranje metode getImagePath.
•	Klasa Image će implementirati ImageInterface i imati osobine kao što su naziv slike, putanja slike, itd.
•	Klasa Gallery će upravljati kolekcijom objekata Image i generirati HTML za slike
Postavite slike u direktorij images. Uvjerite se da su putanje slika pravilno postavljene. Prilagodite CSS stilizaciju prema potrebi.
-->
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerija slika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php
                require 'gallery.php';
                $gallery = new Gallery();
                $gallery->displayImages();
            ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('#imageModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var imageSrc = button.data('src'); // Extract info from data-* attributes
            var imageTitle = button.data('title');

            var modal = $(this);
            modal.find('.modal-title').text(imageTitle);
            modal.find('#modalImage').attr('src', imageSrc);
        });
    </script>
</body>
</html>
