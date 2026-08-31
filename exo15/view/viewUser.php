<?php
namespace View;

use View\View;

class ViewUser extends View{
    //ATTRIBUT
    private string $message = '';

    //CONSTRUCTEUR

    //GETTER ET SETTER
    public function setMessage(string $newMessage):self{
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
        if(isset($_SESSION) && !empty($_SESSION)){
?>
            <h2>Liste des utilisateurs</h2>
<?php     
            foreach($this->getData() as $row){
?>
                <ul>
                    <li>Pseudo : <?= $row['pseudo'] ?> - Email : <?= $row['email'] ?> - Role : <?= $row['role'] ?></li>
                </ul>
<?php    
                }
        } else {
?>
            <main>
                <h2>Connexion</h2>
                    <form action="" method="post">
                        <label for="email">Votre Email<input type="text" id="email" name="email"></label><br>
                        <label for="password">Votre Mot de Passe<input type="password" id="password" name="password"></label>
                        <input type="submit" name="submitConnexion" value="Se Connecter">
                    </form>
                    <p><?php echo $this->message ?></p>

                <h3>Inscription</h3>
                    <form action="" method="POST">
                        <label for="pseudo">Votre pseudo<input type="text" id="pseudo" name="pseudo"></label><br>
                        <label for="email">Votre email<input type="text" id="email" name="email"></label><br>
                        <label for="password">Votre mot de passe<input type="password" id="password" name="password"></label><br>
                        <label for="confirm_password">Confirmer votre mot de passe<input type="password" id="confirm_password" name="confirm_password"></label><br>
                        <input type="submit" name="subscribe" value="S'inscrire">
                    </form>
                    <p><?php echo $this->message ?></p>
            </main>
<?php
        };
        //Récupération du buffer dans la propriété $this->buffer
        $this->setBuffer(ob_get_clean());
        return $this;
    }

}
