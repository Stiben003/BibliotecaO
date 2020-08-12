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
        <a class="nav-link" href="categoria.php">Categoria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="autor.php">Autor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="editorial.php">Editorial</a>
      </li>
    </ul>
  </div>
  <div class="container">
              <div class="container-flat-form">
                  <div class="title-flat-form title-flat-blue">Agregar una nueva editorial</div>
                      <div class="container">
                        <div class="col-xs-12 m-5 col-sm-offset-2">
                        <form autocomplete="off" method="POST">
                              <div class="group-material">
                                  <input type="text" class="material-control" placeholder="Escribe aquí el nombre de la editorial" required=""  maxlength="50" data-placement="top" title="Escribe el nombre de la editorial" name="editorial">
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  <label>Nombre</label>
                              </div>
                              <p class="text-center">
                                  <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                  <button type="submit" name="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                              </p> 
                          </form>
                        </div>
                      </div>
              </div>
          </div>
          <?php
            if (isset($_POST['submit'])){
              include("connect.php");
              $editorial = $_POST["editorial"];
              $query = mysqli_query($conexion, "SELECT * FROM editorial WHERE descripcion= '$editorial'");
              if (mysqli_num_rows($query) > 0){
                echo "Este registro ya existe.";
                }else{
                $insertar = "INSERT INTO `editorial`(`descripcion`) VALUES ('$editorial')";
                $consultar = mysqli_query($conexion, $insertar);
              }
              
            }
          ?>
  

<?php include "footer.php"; ?>

</body>
</html>