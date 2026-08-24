<?php

class ViewArticle {
    private $listArticles = "";
    private ?array $dataArticles;
    private ViewFooter $viewFooter;
    private ViewHeader $viewHeader;

    public function __construct() {
        $this->viewFooter = new ViewFooter();
        $this->viewHeader = new ViewHeader("Articles");
    }

    public function setDataArticles(array $newData){
        $this->dataArticles = $newData;
    }

    public function display():void{
        foreach($this->dataArticles as $row){
            $this->listArticles .="<article><h2>".$row['title']."</h2><h3>By :".$row['pseudo']."</h3></article>";
                };
            echo "<main>
                    <h1>Liste des Articles</h1>
                    <ul>" . $this->listArticles . "</ul>
                </main>";
    }

    public function displayAll():void{
        $this->viewHeader->display();
        $this->display();
        $this->viewFooter->display();
    }
}
?>



