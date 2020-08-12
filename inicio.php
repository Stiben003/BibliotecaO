<?php
    session_start();

    if (!isset($_SESSION['rol'])) {
        header('location: index.php');
    }else{
        if($_SESSION['rol'] !=1){
            header('location: index.php');
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


<?php 
    include "header.php"; 
    include "./connect.php";
    $selectUsuario=$conexion->query("SELECT COUNT(id) FROM `login` where rol_id = 2;"); 
    $row = mysqli_fetch_array($selectUsuario);    
    $selectLibro=$conexion->query("SELECT COUNT(idlibro) FROM `libro`;"); 
    $row1 = mysqli_fetch_array($selectLibro);   
    $Selectcategoria=$conexion->query("SELECT COUNT(idcategoria) FROM `categoria`;"); 
    $row2 = mysqli_fetch_array($Selectcategoria);
    $Selectautor=$conexion->query("SELECT COUNT(idautor) FROM `autor`;"); 
    $row3 = mysqli_fetch_array($Selectautor);
    $Selecteditoriales=$conexion->query("SELECT COUNT(ideditorial) FROM `editorial`;"); 
    $row4= mysqli_fetch_array($Selecteditoriales);   
    $Selectdescarga=$conexion->query("SELECT COUNT(iddescarga) FROM `descarga`;"); 
    $row5 = mysqli_fetch_array($Selectdescarga);      
    
?>
<section class="py-3">
    <h1 class="my-4">Pagina Principal</h1>
        <div class="container my-5">
            
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="row d-flex flex-row justify-content-center align-items-center">
                        <div class="col-lg-3 col-md-6 d-flex my-3">
                            <div class="mx-auto">
                                <h5 class="text-muted">Usuarios</h5>
                                <h2 class="font-weight-bold"><?php echo $row[0]; ?></h2>
                                <h6 class="text-success">Registrados</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex my-3">
                            <div class="mx-auto">
                                <h5 class="text-muted">Libros</h5>
                                <h2 class="font-weight-bold"><?php echo $row1[0]; ?></h2>
                                <h6 class="text-success">Registrados</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex my-3">
                            <div class="mx-auto">
                                <h5 class="text-muted">Categorias</h5>
                                <h2 class="font-weight-bold"><?php echo $row2[0]; ?></h2>
                                <h6 class="text-success">Registrados</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex my-3">
                            <div class="mx-auto">
                                <h5 class="text-muted">Autores</h5>
                                <h2 class="font-weight-bold"><?php echo $row3[0]; ?></h2>
                                <h6 class="text-success">Registrados</h6>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row d-flex flex-row justify-content-center align-items-center">
                        <div class="col-lg-3 col-md-6 d-flex my-3">
                            <div class="mx-auto">
                                <h5 class="text-muted">Editoriales</h5>
                                <h2 class="font-weight-bold"><?php echo $row4[0]; ?></h2>
                                <h6 class="text-success">Registrados</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex my-3">
                            <div class="mx-auto">
                                <h5 class="text-muted">Descargas</h5>
                                <h2 class="font-weight-bold"><?php echo $row5[0]; ?></h2>
                                <h6 class="text-success">Registrados</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>


<?php include "footer.php"; ?>

</body>
</html>