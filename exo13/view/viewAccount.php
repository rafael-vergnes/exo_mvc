<?php

namespace View;

class ViewAccount extends View{
    private array $dataSession;

    public function setDataSession(array $newDataSession):array {
        $this->dataSession = $newDataSession;
        return $this;
    }

    public function launchBuffer():self{
        //Lancement de la mise en mémoire tampon
        ob_start();
?>
            <main>
                <h1>Liste des Articles</h1>
                <ul>
<?php
                    //Boucle d'affichage du tableau de donnée des articles au sein du template HTML
                    foreach($this->$dataSession as $row){
?>
                        <li>Id : <?= $row['id'] ?> - Pseudo : <?= $row['pseudo'] ?> - Email : <?= $row['email'] ?>
                        - Crée le : <?= $row['created_at'] ?>
                        - Rôle : <?= $row['role'] ?></li>
<?php
                    }
?>
                </ul>
            </main>
<?php
        //Récupération du Buffer et nettoyage de ce dernier
        $this->setBuffer(ob_get_clean());

        //Retour de l'objet pour permettre le chaînage de méthode
        return $this;
    }

}