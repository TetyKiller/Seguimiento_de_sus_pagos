<?php
    require_once 'conexion.php';
    $conn = dbConnect();
	$result=mysqli_query($conn,"SELECT * from pagos");
?>