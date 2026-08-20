<?php
class Vehicule{
    //ATTRIBUT
    private string $nomVehicule;
    private int $nbrRoue;
    private float $vitesse;

    //CONSTRUCTEUR
    public function __construct(string $nom, int $nbrRoue, float $vitesse){
        $this->nomVehicule = $nom;
        $this->nbrRoue = $nbrRoue;
        $this->vitesse = $vitesse;
    }

    //GETTER
    public function getVitesse():float{
        return $this->vitesse;
    }

    public function getNom():string{
        return $this->nomVehicule;
    }

    //METHODS
    public function demarer():void{
        echo "<p>".$this->nomVehicule." démarre</p>";
    }

    public function detect():string {
        switch($this->nbrRoue){
            case 4 :
                return "voiture";
            case 2 :
                return "moto";
        }
    }

    public function boost():void{
        $this->vitesse += 50;
    }

    public function plusRapide(Vehicule $vehicule):Vehicule | array{
        if($this->vitesse > $vehicule->vitesse){
            return $this;
        }else if($this->vitesse < $vehicule->vitesse){
            return $vehicule;
        }else{
            return [$this, $vehicule];
        }
    }
}