<?php include "../partials/header.php" ?>


<?php
$Manager = new Manager($connexion);

$tourOperators = $Manager->getALLTourOperatorWithReview();

?>

<link rel="stylesheet" href="../style/agenceList.css">

<?php

      foreach ($tourOperators as $tourOperator) { 
        
?>
      
      <section class="container cardlist d-flex justify-content-center align-items-center">

<!-- image agence -->
<div class="col-4 img-wrapper m-5">
    <img class="inner-img image w-100" src="../images/images/Agencedevoyage/<?= $tourOperator->getName() ?>.jpeg">
</div>

<!-- Conteneur de présentation et de messages -->
<div class="col-8">
    <!-- presentation agence -->
    <div class="text-center mb-3">
        <h3 class="text-white">Présentation de notre agence de voyage</h3>
    </div>

    <!-- Messages -->
    <div class="container">
        <div class="col-12">
            <?php foreach ($tourOperator->getReview() as $review) {?>
                <div class="bg-white rounded text-center mb-3"> <?=$review->getMessage()?></div>
            <?php } ?>

            <!-- Form de commentaire -->
            <div class="col-9">
                <form action="../process/commentaire/new-comment.php?tour_operator_id=<?= $tourOperator->getIdTO() ?>" class="d-flex" role="search" method="post">
                    <input class="form-control me-2" name="chat" id="chat" placeholder="Laisser un commentaire..." aria-label="Search">
                    <button class="btn btn-danger" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>



      <?php
      }
      ?>



<?php include "../partials/footer.php" ?>