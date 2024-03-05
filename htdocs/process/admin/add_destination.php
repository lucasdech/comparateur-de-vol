<?php 

// insert into 

// header location

require_once '../../setting/db.php';

if (!empty($_POST['name'])) {

    $createDestination = $connexion->prepare(
        "INSERT INTO destination (location, price, tour_operator_id) VALUES (?,?,?)"
    );
    $createDestination->execute([
        $_POST["name"],
        $_POST["price"],
        $_POST["TourOperator"],
    ]);


    header("Location: ../../index.php?success= Tour operator ajouter avec succes");
}else {
    header("Location: ../../pages/admin.php?error= Tour operator ajouter avec succes");
    
}