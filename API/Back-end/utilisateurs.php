<?php
//inclure les ressources
include './env.php';
include './utils/functions.php';
include './model/modelUtilisateur.php';

//mise en place de la fonction listeUtilisateurs()
function listeUtilisateurs($host,$dbname,$login,$password){
    // Headers requis
    // Accès depuis n'importe quel site ou appareil (*)
    header("Access-Control-Allow-Origin: *");
    // Format des données envoyées
    header("Content-Type: application/json; charset=UTF-8");
    // Méthodes autorisées
    header("Access-Control-Allow-Methods: GET, OPTIONS");
    // Durée de vie de la requête
    header("Access-Control-Max-Age: 3600");
    // Entêtes autorisées
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
        
    // Réponse au preflight envoyé par le navigateur
    if($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
        http_response_code(204);
        return;
    }

    // Vérification de la méthode : si ce n’est pas la bonne, on renvoie une erreur
    if($_SERVER['REQUEST_METHOD'] != 'GET'){
        http_response_code(405);
        echo json_encode(["message" => "La méthode n'est pas autorisée"]);
        return;
    }

    try{
        //Connexion à la BDD
        $bdd = connect($host,$dbname,$login,$password);

        //Récupération de la liste des utilisateurs
        $data = lireUtilisateurs($bdd);

        //Envoi des données
        http_response_code(200);
        echo json_encode($data);

    }catch(Exception $error){
        //Une API doit répondre en JSON MEME quand elle plante
        http_response_code(500);
        //On n'envoie jamais $error->getMessage() : cela exposerait la structure de la BDD
        echo json_encode(["message" => "Une erreur serveur est survenue"]);
        return;
    }
}

listeUtilisateurs($_ENV['dbhost'],$_ENV['dbname'],$_ENV['dblogin'],$_ENV['dbpassword']);
