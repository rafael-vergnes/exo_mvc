<?php
class Maison{
    //ATTRIBUT
    private string $nom;
    private float $largeur;
    private float $longueur;
    private int $nbrEtage;

    //CONSTRUCTEUR
    public function __construct(string $nom, float $largeur, float $longueur, int $nbrEtage){
        $this->nom = $nom;
        $this->largeur = $largeur;
        $this->longueur = $longueur;
        $this->nbrEtage = $nbrEtage;
    }

    //METHODS
    public function surface(){
        //Calcul de la surface
        $surface = $this->largeur * $this->longueur * ($this->nbrEtage + 1);

        //Afficher le résultat
        echo "<p>La surface de ".$this->nom." est de $surface m².</p>";
    }
}