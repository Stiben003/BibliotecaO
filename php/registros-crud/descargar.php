<?php
    include '../../connect.php';
    session_start();
    if(isset($_REQUEST['descargar'])){
        
        $usuario =  $_SESSION['nuser'];
        $fecha = date("d/m/yy H:i:s");
      
      $sql= " INSERT INTO `descarga`(`usuario`,`FDescarga`) VALUES ('$usuario','$fecha')";
      
        if ($conexion->query($sql)) {
            $msj ='successins';
        } else {
            $msj ='errorins';
        }
      
      
        header("Location: user_infobook.php?s=".$msj);
      
        }

?>