<?php
require ('includes/funciones.php');
incluirTemplate('header');
?>
<html>
    <head>       
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/LOGO.jpg">
        <title>Doctor Pet - Animales Perdidos</title>
        <link href="CSS/EstiloRegistro_Perdidos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    </head>
    <body>
        <main>
            <div class="login-box">
                <h2>Registro de animales perdidos</h2>
                <?php include 'Controlador/Ctrl_MascotaPerdida.php';?> 
                <form action="#" enctype="multipart/form-data" method="POST">
                <div class="user-box">
                    <input type="text" name="nom_lost" required="">
                    <label>Nombre de mascota desaparecida</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="dia_lost" required="">
                    <label>Dia y mes de la desaparición</label>
                  </div>  
                   <div class="user-box">
                    <input type="text" name="lugar_lost" required="">
                    <label>Lugar de desaparición</label>
                  </div> 
                  <div class="user-box">
                    <input type="text" name="numero_duenio" required="">
                    <label>Número de contacto del dueño</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="tamanio_lost" required="">
                    <label>Tamaño de la mascota</label>
                  </div> 
                  <div class="user-box">
                    <input type="text" name="descrip_lost" required="">
                    <label>Descripción de mascota desaparecida</label>
                  </div> 
                  <div class="box-upload">
                    <label for="subirImagen"><i class="fa-solid fa-upload"></i>Subir imagen</label>
                    <input type="file" id="subirImagen" name="imagenlost" required="">
                  </div> 
                  <div class="boton-box">
                      <input type="submit" name="enviar" value="Registrar desaparición" id="enviar">
                  </div>
                </form>
                <div class="boton-outline-info">
                      <a href="AnimalesPerdidos.php">Regresar página</a>
                </div>
            </div>  
        </main>
    </body>
    <?php 
?>
</html>


