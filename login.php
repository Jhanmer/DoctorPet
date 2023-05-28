<?php
session_start();

include "Config/conexion.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Pet - Login</title>
    <link rel="stylesheet" href="estilos/css/normalize.css">
    <link rel="stylesheet" href="estilos/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/css/header.css">
    <link rel="stylesheet" href="estilos/css/footer.css">
    <link rel="stylesheet" href="estilos/css/contacto.css">
    <link rel="stylesheet" href="estilos/css/body.css">
    <link rel="stylesheet" href="estilos/css/login.css">
</head>

<body>
    <img class="wave" src="estilos/img/wave-actualizado.png">
    <img src="estilos/img/DP-DoctorPet.png" alt="">
    <div class="container">
        <div class="img">
            <img src="estilos/img/undraw_medicine_b-1-ol.svg">
        </div>
        <div class="login-content">
            <form action="../Controlador/controladorLogin.php" method="post">
                <img class="avatar" src="estilos/img/undraw_welcome_cats_thqn.svg">
                <h2 class="title">Inicar Sesion</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" class="input"  name="txtEmail" id="txtEmail" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" class="input" name="txtPassword" id="txtPassword" required>
                    </div>
                </div>
                <a href="registro.html">¿No tienes una cuenta? Regístrate ahora</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>