<?php
//POO : Programmation Orientée Objet
// => le paradigme de programmation le plus approprié pour que des fonctions utilisent des structures de données.

//Définition d'une class Article
class Article{
    //ATTRIBUT
    //encapsulation typage $nomAttribut (= valeur par défaut -> optionnelle)
    private string $titre;
    private string $contenu;
    private string $date;
    private string $auteur;

    //CONSTRUCTEUR
    //les ouvriers qui savent comment construire l'objet
    public function __construct($title,$content, $date, $author){
        $this->titre = $title; //j'affecte le paramètre title à l'attribut titre de l'objet en cours de construction ($this)
        $this->contenu = $content;
        $this->date = $date;
        $this->auteur = $author;
    }

    //METHOD
    //les fonctionnalités de notre objet
    //fonction qui permet de générer l'affichage de l'article
    public function cardArticle(){
        echo "<article>
        <h1>".$this->titre."</h1>
        <p>".$this->contenu."</p>
        <p>By ".$this->auteur."</p>
        <p>".$this->date."</p>
        </article>";
    }
}

//Création d'un objet Article grâce à l'instruction new (appel le constructeur)
$article1 = new Article("Mon Titre","Pour la Gloire !","2026-08-19","Yoann");

$article2 = new Article("Mon Titre 2","Un pas après l'autre !","2026-08-19","Mathieu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //utilisation de la méthode de nos objets
        $article1->cardArticle();
        $article2->cardArticle();
    ?>
</body>
</html>