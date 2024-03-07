<?php include "../partials/header.php" ?>


<?php
$Manager = new Manager($connexion);

$tourOperators = $Manager->getALLTourOperatorWithReview();

?>

<link rel="stylesheet" href="../style/agenceList.css">

<?php

      foreach ($tourOperators as $tourOperator) { 
        
?>
      
          <section class="container cardlist d-flex">

              <div class=" col-2  img-wrapper m-5">
                  <img class="inner-img image w-100" src="../images/images/Agencedevoyage/<?= $tourOperator->getName() ?>.jpeg">
              </div>

              <div class="col-10 align-items-center justify-content-center container">

                  <div class="mt-3 text-center">
                      <h3 class="text-white">Présentation de notre agence de voyage</h3>
                  </div>

                    <div class="row">

                        <?php foreach ($tourOperator->getReview() as $review) {?>

                            <div class="bg-white rounded w-50" style="height: 200px;"> <?=$review->getMessage()?> <?=$review->getIdR()?>  </div>
                                      
                          <?php } ?>       

                        <div class="col-9">
                            <form action="../process/commentaire/new-comment.php?tour_operator_id=<?= $tourOperator->getIdTO() ?>" class="d-flex" role="search" method="post">
                                <input class="form-control me-2" name="chat" id="chat" placeholder="Laisser un commentaire..." aria-label="Search">
                                <button class="btn btn-danger" type="submit">Envoyer</button>
                            </form>
                        </div>
                    </div>
              </div>

          </section>

      <?php
      }
      ?>



<?php include "../partials/footer.php" ?>