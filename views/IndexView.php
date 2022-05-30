<?php

require 'views/partials/header.php';

?>

<div class="container">
    <div class="row">
        <?php  
        foreach($Biens_list as $bien){   ?>
        <div class="col-4" style="margin-bottom: 24px;">
            <div class="card" style="width: 26rem;">
                <img src="<?php echo $bien->thumbnail ?>" class="card-img-top img-thumbnail" alt="Image Thumbnail">
            <div class="card-body">
                <h5 class="card-title"><?php echo $bien->getTitre() ?></h5>
                <p class="card-text"><?php echo $bien->getDescription() ?></p>
            </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $bien->nom ?></li>
                    <li class="list-group-item"><?php echo $bien->getPrix() ?>€</li>
                    <li class="list-group-item"><?php echo $bien->getSurface() ?>m²</li>
                    <li class="list-group-item"><?php echo $bien->getNbdepiece() ?> pièce(s)</li>
                    <li class="list-group-item"><?php echo $bien->getAdresse() ?></li>
                </ul>
            <div class="card-body text-end">
                <a href="single.php?id=<?php echo $bien->getId() ?>" class="card-link badge rounded-pill bg-primary">Plus d'info</a>

            </div>
            </div>
        </div>
        <?php };
        //echo '<pre>' , var_dump($Biens_list) , '</pre>';
        //echo '<pre>' , var_dump($bien) , '</pre>';
        ?>
    </div>
</div>

<?php require 'views/partials/footer.php';