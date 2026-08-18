<?php

function getArticle($bdd){
    //2. Préparer une requête pour SELECT les utilisateurs
    $req = $bdd->prepare('SELECT title, pseudo FROM article JOIN user ON user_id = user.id');

    $req->execute();

    return $req->fetchAll(PDO::FETCH_ASSOC);
};