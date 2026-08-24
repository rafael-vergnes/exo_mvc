<?php

class ModelArticle {
    private ?int $title; // le ? signifie que l'attribut a le droit d'être null
    private ?string $content;
    private ?string $created_at;
    private ?string $edited_at;
    private ?string $pseudo;
    private PDO $bdd;

    public function __construct(PDO $bdd){
        $this->bdd = $bdd;
    }

    public function getArticles():?array{
        try{
            //1. Préparer une requête pour SELECT les utilisateurs
            //On utilise l'objet PDO stocké dans l'attribut bdd de notre model ($this->bdd)
            $req = $this->bdd->prepare('SELECT a.title, a.content, a.created_at, a.edited_at, u.pseudo FROM article a INNER JOIN user u ON u.id = a.user_id');

            //2. Exécution de la requête
            $req->execute();

            //3. Return des données utilisateurs
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }catch(EXCEPTION $error){
            die($error->getMessage());
        }
    }
}