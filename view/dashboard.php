<?php
session_start();
if (!isset($_SESSION["user_data"])){
    echo "no existe una sesion iniciada";
    header("Location: /view/login.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola</h1>
    <?php
    session_start();
    $correo = $_SESSION["user_data"]["correo"];
    echo "<h1>Bienvenido $correo</h1>";
    ?>
    <a href="/handle_db/logout.php">logout</a>
</body>
</html>