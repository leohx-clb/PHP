<?php
include 'includes/header.php';
?>
<div class="container">
    <div class="row d-flex justify-content-around">

        <?php
        $i = 0;
        foreach ($mesProduits as [$nom,$url]){
            $i++;
            if ($i <= 3 ){
        ?>
            <div class="card col-4" style="width: 18rem;">
                <img src="<?php echo $url ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nom ?></h5>
                </div>
            </div>

        <?php
            }
        }
        ?>

    </div>
    <div class="d-flex justify-content-around">

        <a href="http://localhost/exoPHP/list.php" class="btn btn-success">Voir tout les produits</a>

    </div>
</div>
<?php
include 'includes/footer.php';
?>
