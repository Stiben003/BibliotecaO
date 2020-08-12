<?php
session_start();
include('../../connect.php');

// INS | UDT | DLT

$i = '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
}


if ($i == 'INS'){ 
    $time = date("d/m/yy H:i:s");
    $usuario = $_SESSION['nuser'];
    $sql= " INSERT INTO `descarga`(`usuario`,`FDescarga`) VALUES ('$usuario','$time')";

    if ($conexion->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    
    header("Location: ../../manage-books.php?s=".$msj);

    }


?>