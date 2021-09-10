<?php
     session_start();
     $id = $_SESSION['ide']; 
    require_once 'conexion.php';
    $conn = dbConnect();
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $catidad = $_POST['cantidad'];   
    
    $sql = "INSERT INTO pagos (id_pagos, nombre, fecha, catidad, usuarios_id) VALUES (NULL, '$nombre', '$fecha', '$catidad', '$id')";
if (mysqli_query($conn, $sql)) {
    header("Location: home.php");

} else {
    header("Location: index.php");

}
mysqli_close($conn);

?>