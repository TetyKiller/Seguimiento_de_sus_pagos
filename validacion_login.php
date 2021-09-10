<?php

$nombre = $_POST['nombre'];
$password = $_POST['contrasena'];

		require_once 'conexion.php';
  $conn = dbConnect();
 
  $consulta = mysqli_query ($conn, "SELECT * FROM usuarios WHERE name = '$nombre' AND password = '$password'");  


  if(!$consulta){ 
      echo mysqli_error($mysqli);
      exit;
  } 
  if($nombre = mysqli_fetch_assoc($consulta)) {
      $id = $nombre["id_user"];
    } else{ 
    }
?>