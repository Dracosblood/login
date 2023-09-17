<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        

       require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
       $stmnt = $mysqli->query("SELECT * FROM users WHERE correo = '$correo'");

       if ($stmnt->num_rows===1){
        $result = $stmnt->fetch_assoc();
        echo "Correo Encontrado";

        if(password_verify($contrasena, $result["contrasena"])){
            header("Location: /view/dashboard.php");
        }
       }
       
    }
    ?>