<?php
class ViewArticle{
    //ATTRIBUT
    private string $listArticles = '';
    private ?array $dataArticles;
    private ViewFooter $viewFooter;
    private ViewHeader $viewHeader;

    //CONSTRUCTOR
    public function __construct(){
        $this->viewFooter = new ViewFooter();
        $this->viewHeader = new ViewHeader("Articles","./public/src/script/scriptArticle.js");
    }

    //GETTER ET SETTER
    // Le Controlleur a besoin de cette méthode public pour donner les data des articles depuis le Model à la View
    public function setDataArticles(array $newArticles):self{
        $this->dataArticles = $newArticles;
        return $this; //return $this (l'objet en cours) est pratique pour utiliser du chaînage de méthode
    }

    //METHODS
    //MEthod pour afficher uniquement le HTML dédié à cette view
    public function display(){
        //traitement des données pour affichage 
        foreach($this->dataArticles as $row){
            $this->listArticles .="<article><h2>".$row['title']."</h2><h3>By :".$row['pseudo']."</h3></article>";
        };
        echo '
            <main>
                <h1>Liste des Articles</h1>
                <ul>'.$this->listArticles.'
                </ul>
            </main>
        ';
    }

    //Method pour recomposer l'entièreté de la page
    public function displayAll():void{
        $this->viewHeader->display();
        $this->display();
        $this->viewFooter->launchBuffer()->display();
    }

}


?>
