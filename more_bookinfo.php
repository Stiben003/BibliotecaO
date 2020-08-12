<?php
  session_start();
    include 'connect.php';
    if (isset($_POST['descargar'])) {
      if($_SESSION['rol'] !=1){
        $time = date("d/m/yy H:i:s");
        $usuario = $_SESSION['nuser'];

        $sql= " INSERT INTO `descarga`(`nombreusuario`,`FDescarga`) VALUES ('$usuario','$time')";

    if ($conexion->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    
    header("Location: ../../manage-books.php?s=".$msj);

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
  <?php include "header.php";
  include 'php/consultas.php';
  $sql = extraerLibros(base64_decode($_GET['id']));
  $row = $sql->fetch_assoc();
  ?>

<div class="container">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Datos del Libro</div>
        <div class="panel panel-default">
            <div class="container">
            <table class="table table-hover table-bordered">
              <tbody>            
                  <tr><td><strong>Portada</strong></td><td><img height="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['portada']); ?>" /></td></tr>
                  <tr><td><strong>Titulo</strong></td><td><?php echo $row['titulo']; ?></td></tr>
                  <tr><td><strong>Autor</strong></td><td><?php echo $row['autor']; ?></td></tr>
                  <tr><td><strong>Categoria</strong></td><td><?php echo $row['categoria']; ?></td></tr>
                  <tr><td><strong>Año</strong></td><td><?php echo $row['year']; ?></td></tr>
                  <tr><td><strong>Editorial</strong></td><td><?php echo $row['editorial']; ?></td></tr>
                  <tr><td><strong>Estado</strong></td><td><?php echo $row['estado']; ?></td></tr>

              </tbody>
        </table>
            </div>
        </div><!-- Fin del Panel -->
    </div>
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Descripcion</div>
        <div class="panel panel-default">
            <div class="container">
            <h6><?php echo $row['descripcion']; ?></h6>
            </div>
        </div><!-- Fin del Panel -->
      </div>
    <div class="row d-flex flex-row justify-content-center align-items-center">
            <div class="form-group">
                <a type="button" href="manage-books.php" class="btn btn-primary btn-lg">Atras</a>
                <a type="submit" name="descargar" href="download.php?archivo=<?php echo $row['pdflibro']; ?>&titulo=<?php echo $row['titulo']; ?>" class="btn btn-secondary btn-lg"> Descargar Libro</a>
              </div>
    </div>
</div>


<?php include "footer.php";?>
                      
</body>
</html>
