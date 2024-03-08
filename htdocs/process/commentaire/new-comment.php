<?php
session_start();

require '../../setting/db.php'; 



if (!empty($_POST['chat'])) {


    // Récuperer le message

    $preparedRequestGetUser = $connexion->prepare(
       "SELECT id FROM author WHERE UserName = ?"
    );

    // requete pour faire demarer une session ou en faire une ou reprendre celle en cours
    
    $preparedRequestGetUser->execute([
       $_SESSION['pseudo']
    ]);

    $author = $preparedRequestGetUser->fetch(PDO::FETCH_ASSOC);



    $preparedRequest = $connexion->prepare(
        "INSERT INTO review(message, tour_operator_id, author_id) VALUES (?,?,?)"
    );
    $preparedRequest->execute([


        $_POST['chat'],
        $_GET['tour_operator_id'],
        $author['id'],
    ]);

    header("Location: ../../../pages/agenceList.php?success= Commentaire bien ajouté ! Merci.");
} else {
    
    header("Location: ../../../pages/agenceList.php?error= Echec lors de l'ajout d'un comentaire, merci de reessayer .");
}



// faire les header location