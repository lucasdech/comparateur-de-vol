<?php include "../partials/header.php" ?>


<?php
$Manager = new Manager($connexion);

$tourOperator = $Manager->getALLTourOperator();

echo '<pre>';
var_dump($tourOperator);
echo '</pre>';

?>

<?php

foreach ($tourOperator as $key) { 
    
    ?>

    <div class="card" style="width: 18rem;">
        <img src="../images/images/Agencedevoyage/<?=$key->getName()?>.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $key->getName() ?></h5>
            <p class="card-text">Présentation de notre agence</p>

            <div class="row">
                <form action="../process/commentaire/new-comment.php?tour_operator_id=<?=$key->getIdTO()?>" class="d-flex" role="search" method="post">
                    <input class="form-control me-2" name="chat" id="chat" placeholder="Laisser un commentaire..." aria-label="Search">
                    <button class="btn btn-danger" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>


<?php
}
?>



<?php include "../partials/footer.php" ?>