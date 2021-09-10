<?php
function dbDelete ($id){
        $idpagos=$id;
		require_once 'conexion.php';
        $conn = dbConnect();      
$sql = "DELETE FROM usuarios WHERE id=".$idpagos;
mysql_query($sql, $conn);
}
?>