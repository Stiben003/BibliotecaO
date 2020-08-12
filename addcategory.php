<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Biblioteca Online</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./librerias/bootstrap4/bootstrap.min.css">
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
  <div class="container">
    <ul class="nav nav-tabs nav-fill m-3">
      <li class="nav-item">
        <a class="nav-link active" href="addcategory.php">Categoria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addauthor.php">Autor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addeditorial.php">Editorial</a>
      </li>
    </ul>
  </div>
  

<div class="container">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Agregar una nueva categoría</div>
        <div class="panel panel-default">
            <div class="container">
                <form action="php/registros-crud/category.php?accion=INS" method="post">
                    <div class="form-group">
                    <label>Nombre de la categoría</label>
                    <input class="form-control" type="text" placeholder="Ingrese una nueva categoria" name="descripcion" autocomplete="off" required />
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-offset-2 col-xs-12 col-xs-offset-0">
                            <div class="form-group">
                                <a href="./" class="btn btn-info">Atras</a>
                                <input type="submit" value="Guardar" class="btn bg-bleu" style="color:white;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- Fin del Panel -->
    </div>
</div>

<?php include "footer.php";?>