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

            <h2>Modifier mon compte</h2>
                <form action="" method="POST">
                    <label for="pseudo">Votre pseudo actuel<input type="text" id="pseudo" name="pseudo"></label><br>
                    <label for="new_pseudo">Votre nouveau pseudo<input type="text" id="new_pseudo" name="new_pseudo"></label><br>
                    <label for="email">Votre email actuel<input type="text" id="email" name="email"></label><br>
                    <label for="new_email">Votre nouvel email<input type="text" id="new_email" name="new_email"></label><br>
                    <label for="password">Votre mot de passe actuel<input type="password" id="password" name="password"></label><br>
                    <label for="new_password">Votre nouveau mot de passe<input type="password" id="new_password" name="new_password"></label><br>
                    <label for="confirm_new_password">Confirmer votre nouveau mot de passe<input type="password" id="confirm_new_password" name="confirm_new_password"></label><br>
                    <input type="submit" name="submitModification" value="Confirmer les modifications">
                </form>
                <p><?php echo $this->message ?></p>

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