<?php include "./php/consultas.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./js/jquery.js"></script>
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

    <!--Data Tables-->
    <link rel="stylesheet" type="text/css" href="./librerias/DataTables/datatables.min.css" />
    <script type="text/javascript" src="./librerias/DataTables/datatables.min.js"></script>

    <!-- Botones -->
    <link rel="stylesheet" type="text/css" href="./librerias/DataTables/DataTables-1.10.21/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
 
    <script type="text/javascript" language="javascript" src="./librerias/DataTables/DataTables-1.10.21/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
        $('#miTabla').DataTable();
        } );
    </script>


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
        <h1>Listado de Libros</h1>
    </div>
    <div class="panel-body">
    <br>
        <table id="miTabla" class="table table-striped display" style="text-align: center;">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Estado</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = lista_libro();
                    while ($row = $query->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>".$row['idlibro']."</td>
                                <td>".$row['titulo']."</td>
                                <td>".$row['autor']."</td>
                                <td>".$row['categoria']."</td>
                                <td>".$row['estado']."</td>
                                <td><a data-toggle='tooltip' title='Mas info' href='more_bookinfo.php?id=".base64_encode($row['idlibro'])."' class='btn btn-info'> <i class='icon ion-md-information-circle'></i> </a>
                                <a data-toggle='tooltip' title='Editar' href='update_book.php?id=".base64_encode($row['idlibro'])."' class='btn btn-primary'> <i class='icon ion-md-create'></i> </a> 
                                <a data-toggle='tooltip' title='Anular' href='php/registros-crud/book.php?accion=DLT&id=".base64_encode($row['idlibro'])."' class='btn btn-danger'> <i class='icon ion-md-trash'></i> </a></td>
                        ";
                    }
                ?>
            </tbody>

        </table>

    </div>

    
<?php include "footer.php"; ?>
</body>

</html>