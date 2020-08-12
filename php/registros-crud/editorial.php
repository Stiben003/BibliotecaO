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
    UPDATE `editorial` SET
    `estado` = 'I'
    WHERE `ideditorial` = '$codigo'
    ";

    if ($conexion->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../../manage-editorials.php?s=".$msj);
}

if ($i == 'UDT'){
    $msj='';
    $descripcion=   $_POST['descripcion'];
    $estado=   $_POST['estado'];
    $codigo=   $_POST['codigo'];

    $sql="
    UPDATE `editorial` 
    SET 
    
    `descripcion`='$descripcion',
    `estado`='$estado'
    WHERE ideditorial = '$codigo'
    ";

    if ($conexion->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }

    header("Location: ../../manage-editorials.php?s=".$msj);
}

if ($i == 'INS'){
    $msj='';
    $descripcion=$_POST['descripcion'];

    $sql="
        INSERT INTO `editorial`
        (
            `descripcion`, 
            `estado`
        ) VALUES (
            '$descripcion',
            'A'
        ) 
    ";

    if ($conexion->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    header("Location: ../../manage-editorials.php?s=".$msj);
}

?>