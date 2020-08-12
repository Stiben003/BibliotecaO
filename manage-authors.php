<?php include "php/consultas.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Categorias</title>
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
$mensaje= '';
    $color = '';

    if (isset($_GET['s'])) {
        switch ($_GET['s']) {
            case 'successins':
                $mensaje = 'Registro almacenado correctamente';
                $color = 'success';
                break;
            case 'errorins':
                $mensaje = 'Imposible almacenar el registro';
                $color = 'danger';
                break;            
            case 'successudt':
                $mensaje = 'Registro actualizado correctamente';
                $color = 'success';
                break;
            case 'errorudt':
                $mensaje = 'Imposible actualizar el registro';
                $color = 'danger';
                break;            
            case 'successdlt':
                $mensaje = 'Registro inhabilitado correctamente';
                $color = 'success';
                break;
            case 'errordlt':
                $mensaje = 'Imposible inhabilitar el registro';
                $color = 'danger';
                break;            
        }
    }

    if (!empty($mensaje) and !empty($color)) {
        //echo '<div class="alert alert-'.$color.'" role="alert">'.$mensaje .'</div> ';
        echo '<div class="alert alert-'.$color .' "role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span>'.$mensaje.'</span>
        </div>';
    }

?>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h1>Listado de Autores</h1>
    </div>
    <div class="panel-body">
    <br>
        <table class="table table-striped" style="text-align: center;">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = lista_autor();
                    while ($row = $query->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>".$row['idautor']."</td>
                                <td>".$row['desc_autor']."</td>
                                <td>".$row['estado']."</td>
                                <td> <a data-toggle='tooltip' title='Editar' href='update_author.php?id=".base64_encode($row['idautor'])."' class='btn btn-primary'> <i class='icon ion-md-create'></i> </a> </td>
                                <td> <a data-toggle='tooltip' title='Anular' href='php/registros-crud/author.php?accion=DLT&id=".$row['idautor']."' class='btn btn-danger'> <i class='icon ion-md-trash'></i> </a></td>
                        ";
                    }
                ?>
            </tbody>

        </table>

    </div>
<?php include "footer.php"; ?>
    
</body>
</html>