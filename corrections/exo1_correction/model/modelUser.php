<?php
function getUser(){
    try{
        $bdd = connect();
        //2. Préparer une requête pour SELECT les utilisateurs
        $req = $bdd->prepare('SELECT pseudo, email, role FROM user INNER JOIN role ON role.id = user.role_id');

        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);
        }catch(EXCEPTION $error){
            die($error->getMessage());
    }
}

function createUser(){
    //requete pour enrtegistrer un utilisateur
}

function deleteUser(){
    //requete pour enrtegistrer un utilisateur
}
