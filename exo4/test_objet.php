<?php

include "vehicule.php";

$vehicule1 = new Vehicule("Mercedes CLK", 4, 250);
$vehicule2 = new Vehicule("Hondas CBR", 2, 280);

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
        echo $vehicule1->detect();
        echo $vehicule2->detect();

        $vehicule1->boost();
        $vehicule2->boost();

        echo $vehicule1->plusRapide($vehicule1, $vehicule2);
    ?>
</body>
</html>
