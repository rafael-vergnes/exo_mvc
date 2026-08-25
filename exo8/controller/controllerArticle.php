<?php

class ControllerArticle {
    private ModelArticle $modelArticle;
    private ViewArticle $viewArticle;
    private ?string $titre;

    public function __construct(ModelArticle $model, ViewArticle $view){
        $this->modelArticle = $model;
        $this->viewArticle = $view;
    }

    public function render(){
        //Appel du model pour récupération des données
        $data = $this->modelArticle->getArticles();

        //2. Fournir les datas à la viewUser
        $this->viewArticle->setDataArticles($data);

        //Appel de la view pour effectuer l'affichage
        $title = "Mes Articles";
        $this->viewArticle->displayAll();
    }
}