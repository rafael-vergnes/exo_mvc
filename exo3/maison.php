<?php

class Maison {
    private string $nom;
    private string $longueur;
    private string $largeur;
    private string $etage;

    public function __construct( string $name, int $length, int $width, int $floor) {
        $this->nom = $name;
        $this->longueur = $length;
        $this->largeur = $width;
        $this->etage = $floor;
    }

    public function calculateSurface(){
        echo "<p>La surface de " . $this->nom . " est égale à " .$this->longueur * $this->largeur ." m² et fait ". $this->etage. " étages.</p>";
    }
}