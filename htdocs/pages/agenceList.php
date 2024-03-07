<?php include "../partials/header.php" ?>


<?php
$Manager = new Manager($connexion);

$tourOperator = $Manager->getALLTourOperator();

echo '<pre>';
var_dump($tourOperator);
echo '</pre>';

?>

<link rel="stylesheet" href="../style/agenceList.css">

<?php

foreach ($tourOperator as $key) {
  
  var_dump($key);
    $idTO = $key->getIdTO(); ?>

    <section class="container cardlist d-flex">

        <div class=" col-2  img-wrapper m-5">
            <img class="inner-img image w-100" src="../images/images/Agencedevoyage/<?= $key->getName() ?>.jpeg">
        </div>

        <div class="col-10 align-items-center justify-content-center container">

            <div class="mt-3 text-center">
                <h3 class="text-white">Présentation de notre agence de voyage</h3>
            </div>

              <div class="row">

                  <?php foreach ($tourOperator as $key) {

                          $reviews = $key->getReview();

                                foreach ($reviews as $key) {

                                    $review = $key->getIdR();

                                    if ($review == $idTO) {

                                ?>  <div class="bg-white rounded w-50" style="height: 200px;"> <?=$key->getMessage()?>PARTIE COMMENTAIRE de cons otn ta mere</div>
                                  
                              <?php  }
                                    }
                            } ?>

                  <div class="col-9">
                      <form action="../process/commentaire/new-comment.php?tour_operator_id=<?= $key->getIdTO() ?>" class="d-flex" role="search" method="post">
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