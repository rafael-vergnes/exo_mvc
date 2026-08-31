<?php
//ROUTEUR
//Démarrage de la session
session_start();

//Autoloader de Composer
//AVANTAGE : les namespaces n'ont plus besoin de se conformer à l'arborescence
//De plus, il est possible de faire un auto-include des fichiers ne comportant pas de class (voir composer.json)
//1. Créer le fichier composer.json
//2. Dans un terminal ouvert dans votre projet, lancer composer install  (pour intaller le dossier ./vendor)
//3. Ajouter le dossier ./vendor au .gitignore
//4. require du fichier php qui s'occupera de l'autoload
require_once __DIR__ . '/vendor/autoload.php';

use Controller\ControllerUser as MonUser; // avec AS je fourni un alias au nom de ma classe
use Controller\ControllerArticle;
use Controller\ControllerAccount;
use Model\ModelUser;
use Model\ModelArticle;
use View\ViewUser;
use View\ViewArticle;
use View\ViewAccount;
use Utils\Utils;

//1. Récupérer l'url demandé par l'utilisateur
$url = parse_url($_SERVER['REQUEST_URI']);

//2. Récupérer le path de l'url : ceux qui vient après le nom de domaine
$path = isset($url['path']) ? $url['path'] : '/';

//3. Appeler le Controller lié à la route demandée
switch ($path) {
    case '/':
    case $_ENV['utilisateurs']:
        // utilisation de l'alias pour le Controller\ControllerUser
        $controller = new MonUser(new ModelUser(Utils::connect()), new ViewUser("Utilisateurs","./public/src/script/scriptUser.js"));
        //Formulaire de connexion
        $controller->seConnecter();
        $controller->registerUser();
        //Rendu de l'affichage
        $controller->render();
        break;

    case $_ENV['articles'] :
        $controller = new ControllerArticle(new ModelArticle(Utils::connect()), new ViewArticle("Articles","./public/src/script/scriptArticle.js"));
        $controller->render();
        break;

    case $_ENV['moncompte'] :
        //Affichage de la page
        $controller = new ControllerAccount(new ModelUser(Utils::connect()), new ViewAccount("Mon Compte",""));
        $controller->deleteAccount();
        $controller->render();
        break;

    case $_ENV['deconnexion'] :
        //Destruction de la sessions
        session_destroy();
        //Redirection vers la page d'accueil (/MVC/ -> $_ENV['utilisateurs'])
        //ici location permet de modifier l'url de la requête => cela produit une redirection HTTP
        header('location:'.$_ENV['utilisateurs']);
        exit;
        break;

    case $_ENV['test'] : //route de test pour garder les autres propres
        //TEST DE FINDBYEMAIL() DU MODELUSER 
        //1. Créer un objet modelUser
        //2. Donner un l'objet un email
        //3. Lui demander de lancer findByEmail()
        //4. Afficher le résultat
        $controller = new ModelUser(Utils::connect());
        $controller->deleteUser();
        break;
        
    default:
        echo "erreur 404";
        break;
}
