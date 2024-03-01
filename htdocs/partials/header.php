<?php

require __DIR__ . '/../setting/db.php';
require __DIR__ . '/../setting/autoLoader.php';
require __DIR__ . '/../setting/messages.php';
// require __DIR__ . '/../setting/debug.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trav low</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>

    <header>
        <section class="NavBar d-flex align-items-center justify-content-around position fixed">
            <div>
                <a href="../index.php"><img src="../images/images/logo.png" alt="logo de l'entreprise de voyage" height="100px"></a>
            </div>
            <div>
                <h1 class="text-white">TRAV L<i class="fa-solid fa-earth-africa fa-xs" style="color: #ffffff;"></i>W</h1>
            </div>
            <div>
                <button type="button" class="btn btn-outline-light">Se connecter</button>
            </div>
        </section>
    </header>
   


    <section class="Left_Nav d-flex col-12 justify-content-center text-center text-white">
        <div class="mt-5 me-2 row col-10">
          <button class="btn btn-outline-light m-3">quelque chose</button>
          <button class="btn btn-outline-light m-3">quelque chose</button>
          <button class="btn btn-outline-light m-3">quelque chose</button>
          <button class="btn btn-outline-light m-3">quelque chose</button>
          <button class="btn btn-outline-light m-3">quelque chose</button>
        
            <i class="mt-5 fa-solid fa-phone" style="color: #ffffff;"></i><p>06-25-92-32-26</p>
            <i class="fa-solid fa-at" style="color: #ffffff;"></i> <p>TravLow@voyagePasChere.com</p>
            <i class="fa-brands fa-instagram" style="color: #ffffff;"></i><p>@stepahne_supercar</p>
        </div>
    </section>

