<?php 
session_start();
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
    
    <form action="/handle_db/update.php" method="POST" class="formu">
        <header>
         <H1>Personal info</H1>
         <P>Basic info, like your name and photo</P>
        <button class="log"><a href="/handle_db/logout.php" class="out">logout</a></button>
        </header>
        <h2>Add your information of contact.</h2>
        <section class="cardsect">
            <h4>Profile</h4> 
            <br>
            <p>Some info may be visible to other people</p>
        </section>
        <section class="cardsection">
            <label for="" class="list-group-item li">Name:</label>
            <input type="text"  class="form-control tam" name="nombre" value="<?= $_SESSION["user_data"]["nombre"]?>">
        </section>
        <section class="cardsection">
            <label for="" class="list-group-item li">Phone:</label>
            <input type="number" class="form-control tam" name="telefono" value="<?= $_SESSION["user_data"]["tlf"]?>">
        </section>
        <section class="cardsection">
            <label for="" class="list-group-item li">Biography:</label>
            <input type="text"  class="form-control tam" name="biografia" value="<?= $_SESSION["user_data"]["bio"]?>">
        </section>
        <button class="btnsave" type="submit">Save</button>
    </form>
    <section class="complete">
            <p>Create By: DarwinDev</p>
            <p>devchallenge.io</p>
    </section>
</body>
</html>