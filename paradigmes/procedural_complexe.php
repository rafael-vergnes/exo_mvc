<?php
$tabArticle1 = ["Mon Titre","Pour la Gloire !","2026-08-19","Yoann"];

$tabArticle2 = ["Mon Titre 2","Un pas après l'autre !","2026-08-19","Mathieu"];

$tabAssoc1 = [
                "titre" => "Mon Titre",
                "contenu" => "Pour la Gloire !",
                "date" => "2026-08-19",
                "auteur" => "Yoann"
            ];

$tabAssoc2 = [
                "titre" => "Mon Titre 2",
                "contenu" => "Un pas après l'autre !",
                "date" => "2026-08-19",
                "auteur" => "Mathieu"
            ];

function cardArticle($tabArticle){
    echo "<article>
        <h1>".$tabArticle['titre']."</h1>
        <p>".$tabArticle['contenu']."</p>
        <p>By ".$tabArticle['auteur']."</p>
        <p>".$tabArticle['date']."</p>
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
        cardArticle($tabAssoc1);
        cardArticle($tabAssoc2);
    ?>
</body>
</html>