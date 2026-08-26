<?php
namespace View;

class View{
    //ATTRIBUT
    private ?array $datas;
    private ViewHeader $viewHeader;
    private ViewFooter $viewFooter;
    private ?string $buffer;

    //CONSTRUCTOR
    public function __construct(){
        $this->viewHeader = new ViewHeader("Articles","./public/src/script/scriptArticle.js");
        $this->viewFooter = new ViewFooter();
    }

    //Setter & Getter
    public function getViewHeader() {
        return $this->viewHeader;
    }

    public function getViewFooter() {
        return $this->viewFooter;
    }

    public function setDatas(array $newDatas):self {
        $this->datas = $newDatas;
        return $this;
    }

    public function getDatas() {
        return $this->datas;
    }

    public function setBuffer($newBuffer):self {
        $this->buffer = $newBuffer;
        return $this;
    }

    public function getBuffer() {
        return $this->buffer;
    }

    //Methods
    //Affichage du contenu de la mémoire tampon
    public function display():void{
        echo $this->buffer;
    }

    //Affichage de l'entièreté de la page
    public function displayAll():void{
        $this->viewHeader->launchBuffer()->display();
        $this->launchBuffer()->display();
        $this->viewFooter->launchBuffer()->display();
    }
}