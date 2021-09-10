<?php
function dbConnect (){
	try {
        $conn=mysqli_connect('localhost','root','123','desafio');

	}
	catch (PDOException $e) {
		echo '<p>Error al conectar a la base de datos</p>';
	    exit;
	}
	return $conn;
 }
 function dbid (){
	$nombre = $_POST['nombre'];
	$password = $_POST['contrasena'];
	$id="";
	
			require_once 'conexion.php';
	  $conn = dbConnect();
	 
	  $consulta = mysqli_query ($conn, "SELECT * FROM usuarios WHERE name = '$nombre' AND password = '$password'");  
	
	  if($nombre = mysqli_fetch_assoc($consulta)) {
		  $id = $nombre["id_user"];
	  }
	  return $id;
 }
 ?>