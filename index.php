<? session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view//style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body class="contenedor">
    <section class="principal">
        <img src="./assets/devchallenges.svg" alt="##" class="img">
            <br>
        <h5 class="card-title titlep">Join thousands of learners from around the world</h5>
            <br>
        <p class="card-text parrap">Master web development  by making real-life <br>projects. There are multiple paths for you to<br> choose</p>
            <br>
        <form action="/handle_db/create.php" method="POST">
            <div class="mb-3 row">
               
                <label  class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control tamano" placeholder="example@email.com" name="correo">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control tamano" id="inputPassword" name="contrasena">
                </div>
            </div>
            <div class="col-auto btnlogin">
                <button type="submit" class="btn btn-primary mb-2 bntresg"> -> Register <-</button>
            </div>
            <div class="icon2">
                <img class="icon" src="/assets/Google.svg">
                <img class="icon" src="/assets/Facebook.svg">
                <img class="icon" src="/assets/Twitter.svg">
                <img class="icon" src="/assets/Gihub.svg">
            </div>
            <div class="dev">
            
                  <?php
            session_start();
            if (isset($_SESSION["duplicado"])){
               echo $_SESSION["duplicado"] = "<script>alert('El correo ya esta registrado.')</script>";;
               unset($_SESSION["duplicado"]);
            } 

            ?>
                
            <p class="parf">Have you a account?</p><a href="/view/login.php">Login</a>
            </div>
        </form>
    </section>
</body>
</html>


