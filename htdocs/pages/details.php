<?php include "../partials/header.php";
 
 $DestinationName = $_GET['Destination'];


 $manager = new Manager($connexion);
 $destinationByOperator = $manager->DestinationByCompanie($DestinationName);

?>

<!-- LIEN VERS LA FEIULLE DE STYLE DE LA PAGE  -->

<link rel="stylesheet" href="../style/login.css">


<?php 

foreach ($destinationByOperator as $destination) {
    
    ?>   <section class="destination text-white d-flex align-items-center justify-content-around col-12" style="background-image: url(./images/images/destination/<?=$destination->getLocation()?>.jpeg);">
            <div class="col-3 d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.5);">
                <p class="fs-1"><?=$destination->getLocation()?></p>
            </div>   
            <div class="col-5"> 
                <a href="./pages/details.php?Destination=<?=$destination->getLocation()?>"><button class="btn btn-outline-light m-3">Voir les offres<i class="fa-solid fa-angles-right ms-3" style="color: #ffffff;"></i></button></a> 
            </div>
        </section>
<?php } ?>


<?php include "./partials/footer.php"?>


  