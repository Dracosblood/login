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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   
    <?php
    
    $nombre = $_SESSION["user_data"]["nombre"];
    echo "<h1 class='bienve'>Welcomen $nombre</h1>";
    ?>
    
  

    <header>
        <H1>Personal info</H1>
        <P>Basic info, like your name and photo</P>
        <button class="log"><a href="/handle_db/logout.php" class="out">logout</a></button>
    </header>
    
    <ul class="list-group list-group-flush card">
        <li class="list-group-item div">
            <section><h4>Profile</h4> 
            <br>
            <p>Some info may be visible to other people</p></section>
            <a href="/view/edit.php" class="linkbtn"><button type="button" class="btn btn-light edit">Edit</button></a> 
        </li>
        <li class="list-group-item lis">
            <h3>PHOTO</h3> <img src="/assets/user.png " class="photo" alt="Foto de perfil">
        </li>
        <li class="list-group-item lis">
            <h3>Name 
                 <?php
                
                $nombre = $_SESSION["user_data"]["nombre"];
                echo "<h3>:  $nombre</h3>";
                ?>
            </h3>
        </li>
        
        <li class="list-group-item lis">
            <h3>Phone 
                <?php
                    
                    $tlf = $_SESSION["user_data"]["tlf"];
                    echo "<h3>:  $tlf</h3>";
                    ?>
                </h3>
        </li>
        <li class="list-group-item lis">
            <h3>Bio 
                <?php
                        
                        $bio = $_SESSION["user_data"]["bio"];
                        echo "<h3>:  $bio</h3>";
                        ?>
            </h3>
        </li>
        <li class="list-group-item lis">
            <h3>Email <?php
    
            $correo = $_SESSION["user_data"]["correo"];
            echo "<h3>:  $correo</h3>";
            ?>
        </h3>
        </li>
        <li class="list-group-item lis">
            <h3>Password: ******* </h3>
        </li>
    </ul>
    <section class="complete">
            <p>Create By: DarwinDev</p>
            <p>devchallenge.io</p>
    </section>
    



</body>
</html>