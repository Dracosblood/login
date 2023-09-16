<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Registrar un Usuario</h1>
    <form action="/handle_db/create.php" method="POST">

        <label>Correo</label>
        <input type="email" name="correo">

        <label>Contraseña</label>
        <input type="password" name="contrasena">

        <button type="submit">Guardar</button>

    </form>
</body>
</html>