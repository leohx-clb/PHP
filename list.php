<?php
include 'includes/header.php';


//// EXERCICE 1
//echo $numbers[0];
//echo $numbers[2];
//echo $numbers[3];
//echo $numbers[4];
//echo '<br>';
//
//// EXERCICE 2
//foreach ($mesProduits as $key => $val){
//    echo $val;
//    echo '<br>';
//}
//
//// EXERCICE 3
//
//if ($prix < 12){
//    echo '<div style="color: green">';
//    echo $prix;
//    echo '<div>';
//}
//
//if ($prix > 12){
//    echo '<div style="color: red">';
//    echo $prix;
//    echo '<div>';
//}
//
////EXERCICE 4
//
//
//    echo 'prix ttc : '. $prixTTC .' / '. 'prix htc : '. $prixHTC;
//
////EXERCICE 5
//echo '<br>';
//getElementTable($mesProduits, 3);
//
////EXERCICE 6
////mise en place des fichier

//EXO 7
// git partager / ajout layout
?>
<div class="container">
    <div class="row d-flex justify-content-around">

        <?php
        foreach ($mesProduits as [$nom,$url]){
            ?>
            <div class="card col-4" style="width: 18rem;">
                <img src="<?php echo $url ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nom ?></h5>
                </div>
            </div>

            <?php
        }
        ?>

    </div>
</div>

<?php
include 'includes/footer.php'
?>





