<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        $hash = password_hash($contrasena, PASSWORD_DEFAULT);

       require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
       $result = $mysqli->query("INSERT INTO usuarios (correo, contrasena) VALUES ('$correo', '$contrasena')");

       if($result) {
        header("Location: /index.php");
       } else{
        echo "error al registrar usuario";
       }
    }
    ?>