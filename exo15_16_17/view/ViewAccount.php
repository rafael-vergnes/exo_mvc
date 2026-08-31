<?php
//La View pour la page Mon Compte
namespace View;

use View\View;

class ViewAccount extends View {
    //ATTRIBUT
    private string $message = '';

    //CONSTRUCTOR

    //GETTER ET SETTER
    public function setMessage(string $newMessage):self{
        $this->message = $newMessage;
        return $this;
    }

    //METHODS
    //la méthode qui stocket en mémoire tampon le HTML à afficher
    public function launchBuffer():self{
        $data = $this->getData();
        ob_start();
?>
        <main>
            <h1>Mon Compte Utilisateur</h1>
                <ul>
                    <li> Pseudo : <?php echo $data['pseudo'] ?></li>
                    <li> Email : <?php echo $data['email'] ?></li>
                    <li> Role : <?php echo $data['role'] ?></li>
                </ul>

            <h2>Supprimer mon compte</h2>
                <form action="" method="POST">
                    <label for="pseudo">Votre pseudo<input type="text" id="pseudo" name="pseudo"></label><br>
                    <label for="email">Votre email<input type="text" id="email" name="email"></label><br>
                    <label for="password">Votre mot de passe<input type="password" id="password" name="password"></label><br>
                    <label for="confirm_password">Confirmer votre mot de passe<input type="password" id="confirm_password" name="confirm_password"></label><br>
                    <input type="submit" name="submitSuppression" value="Confirmer la suppression">
                </form>
                <p><?php echo $this->message ?></p>
        </main>
<?php
        //Récupération du HTML à afficher dans l'Attribur Buffer commun à toutes les Views (voir la class View)
        $this->setBuffer(ob_get_clean());
        //Retour de l'objet entier pour permettre le chaînage de méthode
        return $this;
    }
}