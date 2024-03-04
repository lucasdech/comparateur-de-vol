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
