<?php

    class ViewUser {
    private string $listeUsers;
    private array $dataUsers;
    private ViewHeader $header;
    private ViewFooter $footer;

    public function setListeUsers(string $listeUsers) {
        $this->listeUsers = $listeUsers;
        return $this;
    }

    public function getListeUsers() {
        return $this->listeUsers;
    }

    public function __construct(string $listeUsers, array $dataUsers, ViewHeader $header, ViewFooter $footer) {
        $this->listeUsers = $listeUsers;
        $this->dataUsers = $dataUsers;
        $this->header = $header;
        $this->footer = $footer;
    }

    public function display():void {
        $listeUtilisateur = '';
        ?>

        <main>
        <h1>Liste des utilisateurs</h1>
        <ul>
            <?php
                //traitement des données pour affichage 
                foreach($this->dataUsers as $row){
                    $listeUtilisateur .="<li>Pseudo :".$row['pseudo']." - Email : ".$row['email']." - Role :".$row['role']."</li>";
                };
                echo $listeUtilisateur;
            ?>
        </ul>
        </main>
        
        <?php
    }

    public function displayAll():void {
        echo $this->header->display();
        echo $this->display();
        echo $this->footer->display();
    }

}

