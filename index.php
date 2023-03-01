<?php

@include('Voiture.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $voitureDeJW = new Voiture ("verte", "ford mustang", 3, "John Wick", 60, 0.22);
    // $voitureDeJW -> couleur = 'verte';
    // $voitureDeJW -> marque = 'ford';
    // $voitureDeJW -> nbportes = '3';
    // $voitureDeJW -> proprio = 'John Wick';
    // echo 'La voiture de '. $voitureDeJW->getProprio()  . ' est une ' . $voitureDeJW->getMarque() . ' ' . $voitureDeJW->getNbPortes() . ' portes de couleur ' . $voitureDeJW->getCouleur() . ' conçue pour rouler ' . $voitureDeJW->getDistance() .' kilomètres<br>';
    
    $voitureDeOuiOui = new Voiture ("rouge et jaune", "carice cars", 3, "OuiOui", 65, 0.08);
    // $voitureDeOuiOui -> marque = 'carice cars';
    // $voitureDeOuiOui -> proprio = 'OuiOui';
    // echo $voitureDeOuiOui->getMarque() . '<br>';
    
    // echo 'La voiture de John Wick est : ' . $voitureDeJW -> couleur . ' et de la marque : ' . $voitureDeJW -> marque . '. C\'est une voiture '. $voitureDeJW -> nbportes . ' portes.<br>' ;
    
    // $voitureDeJW -> rouler();
    // $voitureDeOuiOui -> rouler();

    $voitureDeJW->infoCar();
    $voitureDeJW->onOff();
    $voitureDeJW->phareOn();
    $voitureDeJW->rouler(250);
    $voitureDeJW->rouler(100);
    $voitureDeJW->tableauDeBord();

    // $voitureDeOuiOui->infoCar();
    // $voitureDeOuiOui->onOff();
    // $voitureDeOuiOui->phareOn();
    // $voitureDeOuiOui->rouler(100);
    // $voitureDeOuiOui->rouler(170);
    // $voitureDeOuiOui->tableauDeBord();

    ?>

</body>
</html>