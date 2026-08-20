<?php
//import des ressources
include('./Maison.php');

//créer une maison
$maMaison = new Maison("La Pension des Mimosas",10.5,21.30,2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $maMaison->surface() ?>
</body>
</html>