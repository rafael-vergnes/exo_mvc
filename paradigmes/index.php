<?php
$titreArticle1 = "Mon Titre";
$contenuArticle1 = "Pour la Gloire !";
$dateArticle1 = "2026-08-19";
$auteurArticle1 = "Yoann";

$titreArticle2 = "Mon Titre 2";
$contenuArticle2 = "Un pas après l'autre !";
$dateArticle2 = "2026-08-19";
$auteurArticle2 = "Mathieu";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
        <h1><?php echo $titreArticle1 ?></h1>
        <p><?php echo $contenuArticle1 ?></p>
        <p>By <?php echo $auteurArticle1 ?></p>
        <p><?php echo $dateArticle1 ?></p>
    </article>
    <article>
        <h1><?php echo $titreArticle2 ?></h1>
        <p><?php echo $contenuArticle2 ?></p>
        <p>By <?php echo $auteurArticle2 ?></p>
        <p><?php echo $dateArticle2 ?></p>
    </article>
</body>
</html>