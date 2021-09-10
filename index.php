<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos_index.css">
</head>
    <body>
        <form class="form-inse" method="post" action="validacion_login.php" name="form-inse">
                <label>Usuario: </label>
                <input type="text" name="nombre" pattern="[a-zA-Z0-9]+" required />
                <label>Contrasena: </label>
                <input type="password" name="contrasena" required />
            <button type="submit" name="inse" value="inse">Iniciar sesión</button>
        </form>
    </body>
</html>