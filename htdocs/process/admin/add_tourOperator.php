<?php 

// requete sql insert into TableNAME
// faire mes condition si pas rempli en post

require_once '../../setting/db.php';


if (!empty($_POST['name'])
&& !empty($_POST['link']))


{
    $preparedRequestCreateTourOp = $connexion->prepare(
        "INSERT INTO tour_operator (`name`, `link`) VALUES (?,?)"
    );
    $preparedRequestCreateTourOp->execute([
        $_POST["name"],
        $_POST["link"],
    ]);

    header("Location: ../../pages/admin.php?success= Tour operator ajouter avec succes");

}else {

    header("Location: ../../pages/admin.php?error= Tour operator ajouter avec succes");   
}