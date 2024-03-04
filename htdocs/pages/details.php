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
        // var_dump($destination)
    ?>   
        <section class="affichage d-flex align-items-center justify-content-around col-12 mt-5" style="background-image: url(../images/images/destination/<?=$destination['location']?>.jpeg);">
            <div class="col-3 d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.5);">
                <p class="fs-1"><?=$destination['location']?></p>
            </div>
        </section>

<?php } ?>
