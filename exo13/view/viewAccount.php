<?php

namespace View;

class ViewAccount extends View{
    private $id;
    private $pseudo;
    private $email;
    private $role;
    private $created_at;

    public function setDataSession ($newId, $newPseudo, $newEmail, $newRole, $newCreated_at) {
        $this->id = $newId;
        $this->pseudo = $newPseudo;
        $this->email = $newEmail;
        $this->role = $newRole;
        $this->created_at = $newCreated_at;
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
?>
                        <li>Id : <?= $this->id ?> - Pseudo : <?= $this->pseudo ?> - Email : <?= $this->email ?>
                        - Crée le : <?= $this->created_at ?>
                        - Rôle : <?= $this->role ?></li>
<?php
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