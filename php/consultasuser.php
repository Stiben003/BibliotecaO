<?php
	function lista_libro(){		
		include('../connect.php');	
		$sql="SELECT * FROM libro WHERE estado != 'I'";
		return $result=$conexion->query($sql); 
	}
   
	function extraerLibros($id){		
		include('../connect.php');	
		$sql="SELECT * FROM libro WHERE idlibro = '$id'";
		return $result=$conexion->query($sql); 
	}
?>