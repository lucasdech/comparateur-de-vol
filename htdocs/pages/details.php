<?php include "../partials/header.php";
 
 $DestinationName = $_GET['Destination'];


 $manager = new Manager($connexion);
 $test = $manager->DestinationByCompanie($DestinationName);

 echo "<pre>";
 var_dump($test);
 echo "</pre>";
 die;


?>

<!-- LIEN VERS LA FEIULLE DE STYLE DE LA PAGE  -->

<link rel="stylesheet" href="../style/login.css">


<section class="destination text-white d-flex align-items-center justify-content-around col-12">
                    <div class="col-3 d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.5);">
                         <img src="../images/images/Agencedevoyage/Fram.png" height="100px" alt="">
                         <p class="fs-1"><?=$_GET['Destination']?></p>      
                           
                    </div>   
                   
</section>

  