<?php
//CONTROLLER
//Indication de l'espace de nom possédant la class ControllerUser
namespace Controller;

/*Bonne pratique des namespaces :
- utiliser un namespace identique au nom du dossier
- La première lettre de chaque lettre d'un namespace commence par une Majuscule
=> le nom du dossier doit commencer par une Majuscule
- Le nom du fichier doit être identique au nom de la class, majuscule comprise
*/

use Controller\Controller;
use Model\ModelUser;
use View\ViewUser;
use Utils\Utils;

class ControllerUser extends Controller{
    //ATTRIBUTS

    //CONSTRUCTEUR
    

    //GETTER ET SETTER
    

    //METHODS

    public function seConnecter() {
        if(isset($_POST["submit"])) {
            if(!empty($_POST["email"]) && 
            !empty($_POST["password"])) {
                if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $email = Utils::sanitize($_POST["email"]); 
                    $password = Utils::sanitize($_POST["password"]);
                    $data = $this->getModel()->setEmail($email)->findByEmail();
                    if($data) {
                        if(password_verify($password, $data["password"])) {
                            session_start();
                            $_SESSION["id"] = $data["id"];
                            $_SESSION["pseudo"] = $data["pseudo"]; 
                            $_SESSION["email"] = $data["email"]; 
                            $_SESSION["created_at"] = $data["created_at"]; 
                            $_SESSION["role"] = $data["role"];
                            $this->getView()->setMessage("Connexion réussie !");
                        } else {
                            $this->getView()->setMessage("Email et/ou Mot de passe incorrect");
                        }
                    } else {
                        $this->getView()->setMessage("Email inconnu");
                    }
                } else {
                    $this->getView()->setMessage("Format d'email incorrect");
                }
            } else {
                $this->getView()->setMessage("Un ou plusieurs champs sont vides");
            }
        }
    }

}
