<?php
namespace View;

use View\View;

class ViewUser extends View{
    //ATTRIBUT
    private ?string $message = "";

    //CONSTRUCTEUR

    //GETTER ET SETTER
    public function setMessage(?string $newMessage) {
        $this->message = $newMessage;
        return $this;
    }
    
    //METHODS
    //Mise en mémoire tampon
    public function launchBuffer():self{
        //1. traitement des données pour affichage 
        // foreach($this->dataUsers as $row){
        //         $this->listUsers .="<li>Pseudo :".$row['pseudo']." - Email : ".$row['email']." - Role :".$row['role']."</li>";
        // };

        ob_start();
?>
            <main>
                <h1>Liste des utilisateurs</h1>
                <ul>
<?php  
                // inclusion de la boucle foreach effectuer en 1. (plus haut) au sein du template HTML mis en buffer
                foreach($this->getData() as $row){
?>
                    <li>Pseudo : <?= $row['pseudo'] ?> - Email : <?= $row['email'] ?> - Role : <?= $row['role'] ?></li>
<?php    
                }
?>
                </ul>

                <form action="" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"><br>
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password"><br>
                    <input type="submit" name="submit" value="Confirmer"><br>
                    <p> <?= $this->message ?> </p>
                </form>
            </main>
<?php
        //Récupération du buffer dans la propriété $this->buffer
        $this->setBuffer(ob_get_clean());
        return $this;
    }

}
