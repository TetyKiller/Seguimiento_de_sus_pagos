<?php
 session_start();
 $id = $_SESSION['ide']; 
    require_once 'conexion.php';
    $conn = dbConnect();
	$result=mysqli_query($conn,"SELECT * from pagos WHERE usuarios_id= '$id'");
?>