<!-- requete sql insert into TableNAME-->
<!-- faire mes condition si pas rempli en post -->

<?php 


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
}