<?php 
    require_once 'conexion.php';
    $conn = dbConnect();
    $idS = $_POST['dato'];  
$sql = "DELETE FROM pagos WHERE id_pagos = '$idS'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
    $conn->close();
    header("Location: home.php");
?>