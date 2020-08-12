<?php 
    include_once 'database.php';
    session_start();


    if (isset($_GET['cerrar_sesion'])) {
        session_unset();
        session_destroy();
    }

    if (isset($_SESSION['rol'])) {
        switch ($_SESSION['rol']) {
            case 1:
                header('location: inicio.php');
                break;

            case 2:
                header('location: user/inicio.php');
                break;
            
                default:
                
        }
    }

    $error = '';
    
    if(isset($_POST['usuario']) && isset($_POST['clave'])){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);
        
        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM login WHERE usuario = :usuario AND clave = :clave');
        
        $query->execute([':usuario' => $usuario, ':clave' => $clave]);
            
        $row = $query->fetch(PDO::FETCH_NUM);
        
        if ($row == true){
            $rol = $row[4];
            $nuser = $row[2];
            $_SESSION['nuser'] = $nuser;
            $_SESSION['rol'] = $rol;
            switch ($_SESSION['rol']) {
                case 1:
                    header('location: inicio.php');
                    break;
    
                case 2:
                    header('location: user/inicio.php');
                    break;
                
                    default:
                    
            }
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }
    
require 'frontend/login-vista.php';


?>