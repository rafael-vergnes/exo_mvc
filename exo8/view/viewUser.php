<?php
class ViewUser{
    //ATTRIBUT
    private string $listUsers = '';
    private ?array $dataUsers;
    private ViewFooter $viewFooter;
    private ViewHeader $viewHeader;
    private ?string $buffer;

    //CONSTRUCTEUR
    public function __construct() {
        $this->viewFooter = new ViewFooter();
        $this->viewHeader = new ViewHeader("Utilisateurs");
    }

    //GETTER ET SETTER
    public function setDataUsers(array $newData){
        $this->dataUsers = $newData;
    }

    //METHODS
    public function launchBuffer():self{
        ob_start();

        foreach($this->dataUsers as $row){
                $this->listUsers .="<li>Pseudo : ".$row['pseudo']." - Email : ".$row['email']." - Role : ".$row['role']."</li>";
        };
                
        echo "<main>
            <h1>Liste des utilisateurs</h1>
            <ul>".$this->listUsers."</ul>
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
