<?php
//CONTROLLER

function displayUsers(){
    
    //Appel du model pour récupération des données
    $data = getUser();

    //Appel de la view pour effectuer l'affichage
    $title = "Mes Utilisateurs";
    include('./view/viewHeader.php');
    include('./view/viewUser.php');
    include('./view/viewFooter.php');
}