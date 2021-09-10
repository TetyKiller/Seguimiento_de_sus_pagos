<?php
  $id = $_POST['idpago'];
  require_once 'conexion.php';
  $conn = dbConnect();
 


  $consulta = mysqli_query ($conn, "SELECT * FROM pagos WHERE id_pagos = '$id'");  


  if(!$consulta){ 
      echo mysqli_error($mysqli);
      exit;
  } 
  
  if($id = mysqli_fetch_assoc($consulta)) {
    $ides = $id["id_pagos"];  
    $nombre = $id["nombre"];
      $fecha= $id["fecha"];
      $catidad= $id["catidad"];
  } else {
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modicar</title>
    <link rel="stylesheet" href="estilos_insertar.css">

</head>
    <body>
        <main>
        <form class="form-insertar" method="post" action="update.php" name="form-insertar">
                <label>Nombre del pago: </label>
                <input  type="text" name="nombre" value="<?php echo $nombre ?>" pattern="[a-zA-Z0-9]+"  />
                <label>Fecha que se realizo: </label>
                <input type="date" name="fecha" value="<?php echo $fecha ?>"  />
                <label>Cantidad pagada: </label>
                <input type="number" name="cantidad" value="<?php echo $catidad ?>"  />
            <button type="submit" name="idss" value="<?php echo $ides ?>" >Listo</button>
        </form>
        </main>
    </body>
</html>