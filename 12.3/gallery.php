<?php
// gallery.php

interface ImageInterface {
    public function getImagePath(): string;
}

class Image implements ImageInterface {
    private string $name;
    private string $path;

    public function __construct(string $name, string $path) {
        $this->name = $name;
        $this->path = $path;
    }

    public function getImagePath(): string {
        return $this->path;
    }

    public function getName(): string {
        return $this->name;
    }
}

class Gallery {
    private array $images = [];

    public function __construct() {
        // Primjer dodavanja slika u galeriju
        $this->addImage(new Image('Slika 1', 'images/image1.jpg'));
        $this->addImage(new Image('Slika 2', 'images/image2.jpg'));
        $this->addImage(new Image('Slika 3', 'images/image3.jpg'));
    }

    public function addImage(Image $image) {
        $this->images[] = $image;
    }

    public function displayImages() {
        foreach ($this->images as $image) {
            echo '<div class="col-lg-4 col-md-6 mb-4">';
            echo '<img src="' . $image->getImagePath() . '" alt="' . $image->getName() . '" class="img-thumbnail" data-toggle="modal" data-target="#imageModal" data-src="' . $image->getImagePath() . '" data-title="' . $image->getName() . '">';
            echo '</div>';
        }
    }
}
?>
