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



    <!-- <section style="background-color: #e7effd;">
  <div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-11 col-lg-9 col-xl-7">
        <div class="d-flex flex-start mb-4">
          <img class="rounded-circle shadow-1-strong me-3"
            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" width="65"
            height="65" />
          <div class="card w-100">
            <div class="card-body p-4">
              <div class="">
                <h5>Johny Cash</h5>
                <p class="small">3 hours ago</p>
                <p>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                  ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                  viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                  Donec lacinia congue felis in faucibus ras purus odio, vestibulum in
                  vulputate at, tempus viverra turpis.
                </p>

                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>132</a>
                    <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>15</a>
                  </div>
                  <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i> Reply</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex flex-start">
          <img class="rounded-circle shadow-1-strong me-3"
            src="" alt="avatar" width="65"
            height="65" />
          <div class="card w-100">
            <div class="card-body p-4">
              <div class="">
                <h5></h5>
                <p class="small">5 hours ago</p>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                  cumque doloribus dolorum dolor repellat nemo animi at iure autem fuga
                  cupiditate architecto ut quam provident neque, inventore nisi eos quas?
                </p>

                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>158</a>
                    <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>13</a>
                  </div>
                  <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i> Reply</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->



<?php
}
?>



<?php include "../partials/footer.php" ?>