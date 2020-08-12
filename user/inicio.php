<?php
    session_start();

    if (!isset($_SESSION['rol'])) {
        header('location: ../index.php');
    }else{
        if($_SESSION['rol'] !=2){
            header('location: ../index.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../librerias/bootstrap4/bootstrap.min.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"
    />

     <!-- Font Awesome JS -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>


<?php include "header.php"; ?>
      <!-- Page Content -->
      <div class="container">
          <!-- Page Heading -->
          <h1 class="my-4">
            Pagina Principal
          </h1>

          <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="catalogo.php"
                  ><img class="card-img-top" src="../image/book.jpg" alt=""
                /></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="catalogo.php">Los beneficios de la lectura</a>
                  </h4>
                  <p class="card-text">
                    LVoluptatibus sit, repellat sequi itaque deserunt, dolores
                    in, nesciunt, illum tempora ex quae? Nihil, dolorem!
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"
                  ><img
                    class="card-img-top"
                    src="http://placehold.it/700x400"
                    alt=""
                /></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Two</a>
                  </h4>
                  <p class="card-text">itae.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"
                  ><img
                    class="card-img-top"
                    src="http://placehold.it/700x400"
                    alt=""
                /></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Three</a>
                  </h4>
                  <p class="card-text">
                    umque, odio distinctio velit nostrum temporibus
                    necessitatibus et facere atque iure perspiciatis mollitia
                    recusandae vero vel quam!
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"
                  ><img
                    class="card-img-top"
                    src="http://placehold.it/700x400"
                    alt=""
                /></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Four</a>
                  </h4>
                  <p class="card-text">
                    euismod odio, gravida pellentesque urna varius vitae.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"
                  ><img
                    class="card-img-top"
                    src="http://placehold.it/700x400"
                    alt=""
                /></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Five</a>
                  </h4>
                  <p class="card-text">
                    iverra euismod odio, gravida pellentesque urna varius vitae.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <div class="card h-100">
                <a href="#"
                  ><img
                    class="card-img-top"
                    src="http://placehold.it/700x400"
                    alt=""
                /></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Project Six</a>
                  </h4>
                  <p class="card-text">
                    perferendis rem illo, voluptate atque, sit eius in
                    voluptates, nemo repellat fugiat excepturi! Nemo, esse.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->


<?php include "footer.php"; ?>

</body>
</html>