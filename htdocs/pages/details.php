<?php include "../partials/header.php";

    $DestinationName = $_GET['Destination'];


    $manager = new Manager($connexion);
    $destinationByOperator = $manager->DestinationByCompanie($DestinationName);

    var_dump($destinationByOperator);
    

?>

<!-- LIEN VERS LA FEIULLE DE STYLE DE LA PAGE  -->

<link rel="stylesheet" href="../style/details.css">



<?php 

foreach ($destinationByOperator as $destination) {

    ?>   
        <section class="affichage d-flex align-items-center justify-content-around col-12 mt-5" style="background-image: url(../images/images/destination/<?=$destination['location']?>.jpeg);">
            
            <div class="col-6 d-flex justify-content-center align-items-center text-white" style="background-color: rgba(0, 0, 0, 0.5);">
                <p class="fs-1"><?=$destination['location']?></p>
                <p class="fs-1 mx-5">Prix :<?=$destination['price']?></p>
            </div>

        </section>


<?php } ?>
