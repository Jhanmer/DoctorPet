<?php
session_start();
include "Config/conexion.php";
?>
<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$consultaDist = "select * from dp_distrito;";
$ListaDist = mysqli_query($con, $consultaDist);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Pet - Iniciar Sessión</title>
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
            <form action="#" method="POST">
                <?php include 'Controlador/Ctrl_Registro_Cliente.php'; ?>
                <img class="avatar" src="estilos/img/undraw_welcome_cats_thqn.svg">
                <h2 class="title">Registrarse</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="nombres" placeholder="Nombres" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                    <input type="text" name="apellidos" placeholder="Apellidos" required >
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-cake-candles"></i>
                    </div>
                    <div class="div">
                        <input type="date" min="1900-01-01" name="fecha_nacimiento"  required>
                    </div>
                </div>
                <div>
                    <div class="div">
                        <input type="radio" name="gender" value="Hombre" required>
                            <p>Hombre</p>
                        <input type="radio" name="gender" value="Mujer" required>
                            <p>Mujer</p>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-location"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="direccion" placeholder="Dirección" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class=""></i>
                    </div>
                    <select name="district" requerid>
                                <option value="">Selecciona un distrito</option>
                                <?php while ($row = mysqli_fetch_assoc($ListaDist)) { ?>
                                    <option value="<?php echo $row["idDistrito"] ?>">
                                        <?php echo $row["Nombre"] ?>
                                    </option>
                                <?php } ?>
                    </select>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                    <input type="text" name="telefono" placeholder="Teléfono"required >
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                    <input type="email" name="correo" placeholder="Correo" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="contraseña" placeholder="Contraseña" requerid>
                    </div>
                </div>

                <a href="login.php">¿ya tienes una cuenta? Inicia Sessión</a>
                <input class="btn" type="submit" name="registro" value="Registrarse">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>

