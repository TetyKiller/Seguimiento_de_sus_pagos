<?php
     session_start();
     $id = $_SESSION['ide']; 
    require_once 'conexion.php';
    $conn = dbConnect();

    $idpagoss = $_POST['idss'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $catidad = $_POST['cantidad'];   
    
    $sql = "UPDATE pagos SET nombre = '$nombre', fecha = '$fecha', catidad = '$catidad' WHERE id_pagos = '$idpagoss' AND usuarios_id = '$id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: home.php");
    
    } else {
        header("Location: index.php");
    
    }
    mysqli_close($conn);
mysqli_close($conn);

?>