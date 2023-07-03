<?php
require_once('mascota.php');
require_once('Config/seguridad.php');
$nombreUsuario = isset($_SESSION["NombreUsuario"]) ? $_SESSION["NombreUsuario"] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DoctorPet</title>
    <script src="https://kit.fontawesome.com/e2ac9cc532.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/css/Rmascota.css">
    <link href="CSS/EstiloRegistro_Mascota.css" rel="stylesheet" type="text/css"/>
</head>

<body>

    
    <!-- partial:index.partial.html -->
    <form action="" method="post" enctype="multipart/form-data">
    <?php include 'Controlador/Ctrl_Registro_Mascota.php';?> 
        <div class='signup-container'>
            <div class='left-container'>
                <h1>
                    <i class='fas fa-paw'></i>
                    DrPet
                </h1>
                <div class='puppy'>
                    <img
                        src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png'>
                </div>
            </div>
            <div class='right-container'>
                <header>
                    <h1>Registra a tu mascota</h1>
                    <div class='set'>
                        <div class='pets-name'>
                            <label for='pets-name'>Nombre</label>
                            <input id='pets-name' name="nom_masc" required="" placeholder="Nombre de la mascota" type='text'>
                        </div>
                        <div class='pets-photo'>
                            <div class="fas fa-camera-retro">
                                <label for="subirImagen"><i class="fa-solid fa-upload"></i></label>
                                <input type="file" id="subirImagen" name="imgMascota">
                            </div> 
                        </div>
                    </div>
                    <div class='set'>
                        <div class='pets-breed'>
                            <label for='pets-breed'>Edad</label>
                            <input id='pets-breed' name="edad_masc" required="" placeholder="Edad" type='text'>
                        </div>  
                    </div>
                    <div class='set'>
                        <div class='pets-breed'>
                            <div class="contenedor-select">
                                <select name="especie_masc" class="select-box">
                                    <option value="">Seleccione especie de la mascota</option>
                                    <?php while($row = mysqli_fetch_assoc($ListaEspecie)){ ?>
                                        <option value="<?php echo $row["idEspecie"] ?>">
                                            <?php echo $row["nombreEspe"] ?>
                                        </option>
                                    <?php } ?>    
                                </select>
                            </div>
                        </div>                
                        <div class="contenedor-select">
                                <select name="raza_masc" class="select-box">
                                    <option value="">Seleccione raza de la mascota</option>
                                    <?php while($row = mysqli_fetch_assoc($ListaRaza)){ ?>
                                        <option value="<?php echo $row["idRaza"] ?>">
                                            <?php echo $row["nombreRaza"] ?>
                                        </option>
                                    <?php } ?>    
                                </select>
                        </div> 
                    </div>
                    <div class='set'>
                        <div class='pets-gender'>
                            <label for='pet-gender-female'>Genero</label>
                            <div class='radio-container'>
                                <input checked='' id='pet-gender-female' name="genero_masc" type='radio' value="Macho">
                                <label for='pet-gender-female'>Macho</label>
                                <input id='pet-gender-male' name="genero_masc" type='radio' value="Hembra">
                                <label for='pet-gender-male'>Hembra</label>
                            </div>
                        </div>
                        <div class='pets-spayed-neutered'>
                            <div class='pets-birthday'>
                                <label for='pets-birthday'>Correo</label>
                                <input id='pets-breed' name="correo" value="<?php echo $nombreUsuario?>" placeholder="Correo del dueño" type='text'  required="" readonly>
                            </div>
                        </div>
                    </div>

                    <div class='pets-weight'>
                        <label for='pet-weight-0-25'>Peso</label>
                        <div class='radio-container'>
                            <input checked='' id='pet-weight-0-25' name="peso" type='radio' value="'0-10'">
                            <label for='pet-weight-0-25'>0-10 Kg</label>
                            <input id='pet-weight-25-50' name="peso" type='radio' value="'10-20'">
                            <label for='pet-weight-25-50'>10-20 Kg</label>
                            <input id='pet-weight-50-100' name="peso" type='radio' value="'20-30'">
                            <label for='pet-weight-50-100'>20-30 Kg</label>
                            <input id='pet-weight-100-plus' name="peso" type='radio' value="'30+'">
                            <label for='pet-weight-100-plus'>30+ Kg</label>
                        </div>
                    </div>
                </header>
                <footer>
                    <div class='set'>
                        <button id='back'><a href="index.php">Regresar</a></button>
                        <input class="btn" type="submit" name="enviar" value="Registrar" id="enviar">
                    </div>
                </footer>
            </div>
        </div>
        <!-- partial -->
    </form>
</body>

</html>