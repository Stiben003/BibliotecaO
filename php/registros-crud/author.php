<?php
include('../../connect.php');

// INS | UDT | DLT

$i = '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
}

if ($i == 'DLT') {    
    $sql="
    UPDATE `autor` SET
    `estado` = 'I'
    WHERE idautor = '$codigo'
    ";

    if ($conexion->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../../manage-authors.php?s=".$msj);
}

if ($i == 'UDT'){
    $msj='';
    $descripcion=   $_POST['descripcion'];
    $estado=   $_POST['estado'];
    $codigo=   $_POST['codigo'];

    $sql="
    UPDATE `autor` 
    SET 
    
    `desc_autor`='$descripcion',
    `estado`='$estado'
    WHERE idautor = '$codigo'
    ";

    if ($conexion->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }

    header("Location: ../../manage-authors.php?s=".$msj);
}

if ($i == 'INS'){
    $msj='';
    $nombre=$_POST['nombre'];

    $sql="
        INSERT INTO `autor`
        (
            `desc_autor`, 
            `estado`
        ) VALUES (
            '$nombre',
            'A'
        ) 
    ";

    if ($conexion->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    header("Location: ../../manage-authors.php?s=".$msj);
}

?>