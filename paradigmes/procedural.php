<?php
$titreArticle1 = "Mon Titre";
$contenuArticle1 = "Pour la Gloire !";
$dateArticle1 = "2026-08-19";
$auteurArticle1 = "Yoann";

$titreArticle2 = "Mon Titre 2";
$contenuArticle2 = "Un pas après l'autre !";
$dateArticle2 = "2026-08-19";
$auteurArticle2 = "Mathieu";

function cardArticle($titre, $contenu, $auteur, $date){
    echo "<article>
        <h1>$titre</h1>
        <p>$contenu</p>
        <p>By $auteur</p>
        <p>$date</p>
        </article>";
}
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
        cardArticle($titreArticle1, $contenuArticle2, $auteurArticle1, $dateArticle1);

        cardArticle($titreArticle2, $contenuArticle2, $auteurArticle2, $dateArticle2);
    ?>
</body>
</html>