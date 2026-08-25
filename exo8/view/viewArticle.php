<?php

class ViewArticle {
    private $listArticles = "";
    private ?array $dataArticles;
    private ViewFooter $viewFooter;
    private ViewHeader $viewHeader;
    private ?string $buffer;

    public function __construct() {
        $this->viewFooter = new ViewFooter();
        $this->viewHeader = new ViewHeader("Articles");
    }

    public function setDataArticles(array $newData){
        $this->dataArticles = $newData;
    }

    public function launchBuffer () {
        ob_start();

        foreach($this->dataArticles as $row){
            $this->listArticles .="<article><h2>".$row['title']."</h2><h3>By :".$row['pseudo']."</h3></article>";
        };
        echo "<main>
                <h1>Liste des Articles</h1>
                <ul>" . $this->listArticles . "</ul>
            </main>";

        $this->buffer = ob_get_clean();

        return $this;
    }

    public function display():void{
        echo $this->buffer;
    }

    public function displayAll():void{
        $this->viewHeader->launchBuffer();
        $this->viewHeader->display();
        $this->launchBuffer();
        $this->display();
        $this->viewFooter->launchBuffer();
        $this->viewFooter->display();
    }
}
?>



