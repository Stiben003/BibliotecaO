<?php
include('../../connect.php');

// INS | UDT | DLT

$i = '';
$codigo= '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

if (isset($_GET['id'])) {
    $codigo = base64_decode($_GET['id']);
}

if ($i == 'DLT') {    
    $sql="
    UPDATE `libro` SET
    `estado` = 'I'
    WHERE `idlibro` = '$codigo'
    ";

    if ($conexion->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../../manage-books.php?s=".$msj);
}

if ($i == 'UDT'){
    $msj='';
    $titulo= $_POST['titulo'];
    $isbn=$_POST['isbn'];
    $descripcion=$_POST['descripcion'];
    $year=$_POST['year'];
    $categoria=$_POST['categoria'];
    $autor=$_POST['autor'];
    $editorial=$_POST['editorial'];
    $estado= $_POST['estado'];
    $codigo = $_POST['codigo'];
    $sql="
    UPDATE `libro`
    SET 
    
    `titulo` ='$titulo',
    `isbn` ='$isbn',
    `descripcion` ='$descripcion',
    `year` ='$year',
    `autor` ='$autor',
    `categoria`='$categoria',
    `editorial` ='$editorial',
    `estado` ='$estado'
    WHERE idlibro = '$codigo'
    ";

    if ($conexion->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }

    header("Location: ../../manage-books.php?s=".$msj);
}

if ($i == 'INS'){ 
    $msj='';
    $titulo     =$_POST['titulo'];
    $isbn       =$_POST['isbn'];
    $descripcion=$_POST['descripcion'];
    $year       =$_POST['year'];
    $categoria  =$_POST['categoria'];
    $autor      =$_POST['autor'];
    $editorial  =$_POST['editorial'];
    $portada = addslashes(file_get_contents($_FILES['portada']['tmp_name']));
    $ruta = "../../libros"; 
    $nombre = $_FILES['archivo']['name'];
    $archivo= $ruta ."/". $nombre;
    move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo);
                    
    $sql="
        INSERT INTO `libro`
        (
            `titulo`,
            `isbn`,
            `descripcion`,
            `year`,
            `autor`,
            `categoria`,
            `editorial`,
            `portada`,
            `pdflibro`,
            `estado`
        ) VALUES (
            '$titulo',
            '$isbn',
            '$descripcion',
            '$year',
            '$autor',
            '$categoria',
            '$editorial',
            '$portada',
            '$nombre',
            'A'
        ) 
    ";

    if ($conexion->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    
    header("Location: ../../manage-books.php?s=".$msj);
}

?>