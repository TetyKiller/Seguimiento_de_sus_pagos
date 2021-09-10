<?php
    include ("validacion_login.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_home.css">
</head>
    <body>
        <header>
        <h1>Pagos Realizados</h1>
        </header>
        <main>
            <?php
                	include("resultado.php");
                while($mostrar=mysqli_fetch_array($result)){
            ?>
                <div class="res">
                <p><?php echo $mostrar['id_pagos'] ?></p>
                <p><?php echo $mostrar['nombre'] ?></p>
                <p><?php echo $mostrar['fecha'] ?></p>
                <p><?php echo $mostrar['catidad'] ?></p>
                    <form action="borrar.php" method="post">
                    <button type="submit" name="dato" value=<?php echo $mostrar['id_pagos'] ?>>Borrar</button>
                    </form>
                </div>
                <?php
                }
                ?>
        </main>
    </body>
</html>