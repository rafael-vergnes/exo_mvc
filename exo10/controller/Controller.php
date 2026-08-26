<?php

namespace Controller;

use Model\Model;

class Controller {
    //ATTRIBUTS
    private Model $model;
    private $view;
    private ?string $titre;

    //CONSTRUCTOR
    public function __construct(Model $model, $view){
        $this->model = $model;
        $this->view = $view;
    }

    //METHODS
    public function render():void{
        //1. Appel du model pour récupérer les données des articles
        $data = $this->model->findAll();

        //2.Passage des data à la View et son Appel pour afficher les data traitées
        $this->view->setData($data)->displayAll();
    }
}