<?php
include('./Vehicule.php');

//Création des 2 objets
$voiture = new Vehicule("Mercedes CLK", 4, 250);
$moto = new Vehicule("Honda CBR", 2, 280);

//lancement de la méthode detect() et affichage du type de vehicule
echo("<p>Ce véhicule est : ".$voiture->detect()."</p>");
echo("<p>Ce véhicule est : ".$moto->detect()."</p>");

//lancement de la méthode boost() de la voiture, et affichage de la nouvelle vitesse
$voiture->boost();
echo("<p>La nouvelle vitesse de la voiture est de : ".$voiture->getVitesse()."km/h</p>");

//récupérer le véhicule le plus rapide
$lePlusRapide = $voiture->plusRapide($moto);
echo("<p>Le Véhicule le plus rapide est : ".$lePlusRapide->getNom()."</p>");