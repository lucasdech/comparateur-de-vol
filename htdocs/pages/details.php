<?php include "../partials/header.php"?>

<?php

    $DestinationName = $_GET['Destination'];

    $manager = new Manager($connexion);
    $destinationByOperator = $manager->DestinationByCompanie($DestinationName);

    echo "<pre>";
    var_dump($destinationByOperator);
    echo "</pre>";

?>

<!-- LIEN VERS LA FEIULLE DE STYLE DE LA PAGE  -->

<link rel="stylesheet" href="../style/details.css">


<?php 

   


foreach ($destinationByOperator as $destination) {

    $TourOperator = $destination->getTour_operators();

    ?>   
        <section class="affichage d-flex align-items-center justify-content-around col-12 mt-5" style="background-image: url(../images/images/destination/<?=$destination->getLocation()?>.jpeg);">
            
            <div class="col-6 d-flex justify-content-center align-items-center text-white" style="background-color: rgba(0, 0, 0, 0.5);">
                <p class="fs-1"><?=$destination->getLocation()?></p>
                <p class="fs-1 mx-5">Prix :<?=$destination->getprice()?></p>
            </div>

           <?php  
                foreach ($destinationByOperator as $key) {

                    $test = $key->getTour_operators();

                        foreach ($test as $key1) {

                            $tourOperatorId = $destination->getTour_operator_id();

                              if ($key1->getId() == $tourOperatorId) {

                                echo $key1->getName();
                                ?> 
                                <img src="../images/images/Agencedevoyage/<?=$key1->getName()?>.jpeg" height="150px" alt="">
                                <div class="text-white"> </div>

                                <?php
                              }
                        }
                    }
?>
        </section>


<?php } ?>
