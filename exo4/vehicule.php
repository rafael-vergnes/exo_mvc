<?php

class Vehicule {
    private string $nomVehicule;
    private int $nbrRoue;
    private float $vitesse;

    public function __construct( string $nomVehicule, int $nbrRoue, float $vitesse) {
        $this->nomVehicule = $nomVehicule;
        $this->nbrRoue = $nbrRoue;
        $this->vitesse = $vitesse;
    }

    public function detect(): string {
        if ($this->nbrRoue < 4) {
            return "<p> Ce véhicule est une moto </p>";
        } else {
            return "<p> Ce véhicule est une voiture </p>";
            }
        return "";
    }

    public function boost() {
        $this->vitesse += 50;
        echo "<p> $this->vitesse </p>";
    } 

    public function plusRapide(object $vehicule1, object $vehicule2): string {
        if ($vehicule1["vitesse"] > $vehicule2["vitesse"]) {
            return "<p>" . $vehicule1["nomVehicule"] . " est le plus rapide </p>";
        } else {
            return "<p>" . $vehicule2["nomVehicule"] . " est le plus rapide </p>";
            }
        return "";
    }
}