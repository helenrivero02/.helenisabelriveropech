<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Registro de usuario</h3>
    <form action="agregar_usuario.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="ingresa usuario">
        <input type="text" name="contrasena" placeholder="ingresa contraseña">
        <input type="text" name="contrasena2" placeholder="ingresa nuevamente pass">
        <button type="submit">Guardar</button>
    </form>

    <h3>login</h3>
    <form action="login.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="ingresa usuario">
        <input type="text" name="contrasena" placeholder="ingresa contraseña">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>