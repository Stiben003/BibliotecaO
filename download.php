<?php
    include('connect.php');

    $archivo = $_GET['archivo'];
    $nombre = $_GET['titulo'].".pdf";
    $ruta = 'libros/' .$archivo;
    header("Content-disposition: attachment; filename= $nombre");
    header("Content-type: application/pdf");
    readfile($ruta);
?>