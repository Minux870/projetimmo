<?php

require 'views/partials/header.php';

$id = $_GET['id'];

?>

<div class="container">
    <div class="card shadow"style="margin-top: 40px;">
        <div class="row">
            <div class="col-8">
                <img src="<?php echo $biensingle->thumbnail ?>" class="img-fluid" alt="...">
            </div>
            <div class="col-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $biensingle->getTitre() ?></h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $biensingle->nom ?></li>
                        <li class="list-group-item">Prix : <?php echo $biensingle->getPrix() ?>€</li>
                        <li class="list-group-item">Surface : <?php echo $biensingle->getSurface() ?>m²</li>
                        <li class="list-group-item">Nb de Pièces <?php echo $biensingle->getNbdepiece() ?> pièce(s)</li>
                        <li class="list-group-item">Adresse : <?php echo $biensingle->getAdresse() ?></li>
                    </ul>
                        <div class="text-center border border-info">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1389.9464747402199!2d1.2683561737720555!3d45.83342541236462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f934963a6941e3%3A0xd9fafafd6d4f8fee!2sAgence%20CENTURY%2021%20AAI%20Immobilier%20Limoges!5e0!3m2!1sfr!2sfr!4v1640782031005!5m2!1sfr!2sfr" width="340" height="340" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                </div>
            </div>
        </div>
      <div>
      <button type="button" class="btn btn-outline-primary text-center" data-bs-toggle="modal" data-bs-target="#mymodal">Gallerie photos Full-screen</button>
      </div>
    </div>
</div>
<div>

</div>

<!-- The Modal -->
<div class="modal modal-fullscreen" id="myModal">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <!-- Modal Header                                        ./assets/img/54900a.jpg
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
      </div> -->
      <!-- Modal body -->
      <div class="modal-body">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <!-- Foreach -->
              <?php $i=0; foreach ($Photosbyid as $Photobyid): ?>
              <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
                  <div class='carousel-item <?php echo $set_; ?>'>
                      <img src='<?php echo $Photobyid->getSrc() ?>' class='col-8 offset-2 d-block h-100'>
                  </div>
              <?php $i++; endforeach ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <p class="text-white text-start">Touche échappe pour sortir du plein-écran ou cliquez sur le bouton ==> </p>
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php require 'views/partials/footer.php';