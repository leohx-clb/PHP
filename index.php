<?php
include 'function.php';
include 'variable.php';
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
<h1>Afficher un tableau</h1>

<?php

// EXERCICE 1
echo $numbers[0];
echo $numbers[2];
echo $numbers[3];
echo $numbers[4];
echo '<br>';

// EXERCICE 2
foreach ($mesProduits as $key => $val){
    echo $val;
    echo '<br>';
}

// EXERCICE 3

if ($prix < 12){
    echo '<div style="color: green">';
    echo $prix;
    echo '<div>';
}

if ($prix > 12){
    echo '<div style="color: red">';
    echo $prix;
    echo '<div>';
}

//EXERCICE 4


    echo 'prix ttc : '. $prixTTC .' / '. 'prix htc : '. $prixHTC;

//EXERCICE 5
echo '<br>';
getElementTable($mesProduits, 3);

//EXERCICE 6
//mise en place des fichier

?>


</body>
</html>


