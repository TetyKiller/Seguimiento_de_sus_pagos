<?php
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_insertar.css">

</head>
    <body>
        <main>
        <form class="form-insertar" method="post" action="insert_into.php" name="form-insertar">
                <label>Nombre del pago: </label>
                <input type="text" name="nombre" pattern="[a-zA-Z0-9]+" required />
                <label>Fecha que se realizo: </label>
                <input type="date" name="fecha" required />
                <label>Cantidad pagada: </label>
                <input type="number" name="cantidad" required />
            <button type="submit" name="idss">Listo</button>
        </form>
        </main>
    </body>
</html>