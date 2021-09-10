<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos_home.css">
</head>
    <body>
        <header>
                <h1>Bienvenido</h1>
                <form action="index.php" method="post">
                        <button type="submit" name="btnsalir"  >Salir</button>
        </form>
        </header>
        <main>
        <div class="opc">
        <form action="insertar.php" method="post">
                        <button type="submit" name="btningresar"  >Ingresar pago</button>
        </form>
        <h1>Pagos Realizados</h1>
                </div>
                <div class="resu">
                <?php
                $sum=0;
                    include("resultado.php");
                    while($mostrar=mysqli_fetch_array($result)){
                        $sum += $mostrar['catidad'];
                ?>
                    <div class="res">
                        <p><?php echo $mostrar['id_pagos'] ?></p>
                        <p><?php echo $mostrar['nombre'] ?></p>
                        <p><?php echo $mostrar['fecha'] ?></p>
                        <p><?php echo $mostrar['catidad'] ?></p>
                        <form action="borrar.php" method="post">
                            <button type="submit" name="dato" value=<?php echo $mostrar['id_pagos'] ?>>Borrar</button>
                        </form>
                        <form action="modificar.php" method="post">
                            <button type="submit" name="idpago" value=<?php echo $mostrar['id_pagos'] ?>>Modicar</button>
                        </form>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <h1>Total Pagado:<?php echo $sum ?></h1>
        </main>
    </body>
</html>