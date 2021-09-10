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

 ?>