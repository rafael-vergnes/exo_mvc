<?php
//Controller de la page Mon Compte
namespace Controller;

use Controller\Controller;
use View\View;
use Utils\Utils;

class ControllerAccount extends Controller {
    //ATTRIBUTS

    //CONSTRUTOR

    //GETTER ET SETTER

    //METHODS
    //Polymorphisme de la méthode render(). En effet, on ne donne pas les données à la View de la même manière que le Controller parent
    public function render():void{
        //1. Tester la Session pour savoir si l'utilisateur a le droit d'accéder à cette page
        if(!isset($_SESSION) || empty($_SESSION)){
            header('location:'.$_ENV['utilisateurs']);
            exit;
        }

        //2. Passer les données à la View depuis la SESSION
        $this->getView()->setData($_SESSION);

        //3. Affichage de la View
        $this->getView()->displayAll();
    }

    public function deleteAccount() {
        if(isset($_POST['submitSuppression'])){
            if(empty($_POST['pseudo']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])){
                $this->getView()->setMessage('Veuillez remplir tous les champs');
                return;
            }
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                $this->getView()->setMessage('Email au mauvais format');
                return;
            }
            $pseudo = Utils::sanitize($_POST['pseudo']);
            $email = Utils::sanitize($_POST['email']);
            $password = Utils::sanitize($_POST['password']);
            $confirm_password = Utils::sanitize($_POST['confirm_password']);
            if($password != $confirm_password) {
                $this->getView()->setMessage('Les mots de passe doivent être identiques');
                return;
            }
            $this->getModel()->setId($_SESSION["id"])->delete();
            session_destroy();
            header('location:'.$_ENV['utilisateurs']);
            exit;
        }
    }
}