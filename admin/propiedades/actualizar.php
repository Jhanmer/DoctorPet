<?php

//validamos el id QUE SE MUESTRA EN EL URL
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if (!$id) {
    header('Location: /admin');
}

//conexion
require '../../includes/config/database.php';
$db = conectarDB();

//Prellenar los datos en los inputs
$consulta = "SELECT * FROM comidap WHERE  idComidap = $id";

$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);


//Validador si está vacio
$errores = [];

//Almacenar previamente los datos registrados (Añadir un value en el input)
$nombre = $propiedad['nombre'];
$precio = $propiedad['precio'];
$imagen = $propiedad['imagen'];
$descripcion = $propiedad['descripcion'];


//Ejecutar el codigo despues de que el usuario envie informacion
//Server nos trae una informacion mas detallada de lo que pasa en el servidor
if ($_SERVER['REQUEST_METHOD'] === 'POST') {;


    //Sanitizardo (validando) datos
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);


    //asignar files hacia una variable
    $imagen = $_FILES['imagen'];



    if (!$nombre) {
        $errores[] = 'Debes añadir un Nombre';
    }
    if (!$precio) {
        $errores[] = 'Debes añadir un Precio';
    }

    if (!$descripcion) {
        $errores[] = 'Debes añadir una Descripcion al menos con 10 caracteres';
    }


    //Validar imagen por tamaño - subida de archivo
    //php soporta un tamaño de imagen como max 2mb
    /* .... */

    //Resivar que el array de errores este vacio
    if (empty($errores)) {

        /* Subida de Archivos */
        $carpetaImagenes = "../../image/";
        //crear carpeta imagenes
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = $propiedad['imagen'];

        //eliminar imagen previa al actualizar (encaso haya una nueva imagen)
        if ($imagen['name']) {

            if (!empty($propiedad['imagen'])) {
                // Eliminar imagen previa solo si hay una imagen actual
                unlink($carpetaImagenes . $propiedad['imagen'] . ".jpg");
            }

            //Generar un nombre unico
            $nombreImagen = md5(uniqid(rand(), true));

            //Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen . ".jpg");
        }


        //insertar en la base de datos
        $query = "UPDATE comidap SET nombre= '$nombre', precio = '$precio', descripcion = '$descripcion', imagen = '$nombreImagen' WHERE idComidap = $id";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            //Redireccionar al usuario
            header('Location: /admin?resultado=2');
        }
    }
}



require('../../includes/funciones.php');
incluirTemplate('header');

?>
<main class="contenedor">
    <br><br>
    <h1>Actualizar Producto</h1>

    <a href="/admin"><input type="submit" class="btn btn-primary" style="font-size: 15px;" value="Volver al Admin"></input></a>
    <br><br><br>
    <!-- mostrar los errores -->
    <?php foreach ($errores as $error) : ?>

        <div class="alert alert-danger d-flex align-items-center" role="alert" style=" font-size: 20px; text-align: center; justify-content: center;">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                <i class="fa-sharp fa-solid fa-circle-exclamation"></i> <?php echo $error ?>
            </div>
        </div>

    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion del Producto</legend>

            <div class="contenedor-campos">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" class="input-text" type="text" placeholder="RicoCan, Thor, NutriCan" value="<?php echo $nombre ?>">
                </div>

                <div class="campo">
                    <label for="precio">Precio S/.</label>
                    <input id="precio" name="precio" class="input-text" type="tel" placeholder="S/.00" value="<?php echo $precio ?>">
                </div>

                <div class="campo">
                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/jpg, image/png" class="input-text">
                    <div style="width: 90px;">
                        <img src="/image/<?php echo $imagen . ".jpg" ?>" alt="imagen">
                    </div>

                </div>

                <div class="campo">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" class="input-text" name="descripcion" placeholder="Alimento Balanceado"><?php echo $descripcion ?></textarea>
                </div>
            </div> <!-- .contenedor-campos -->
            <br><br>
            <div class="alinear-derecha flex">
                <input class="btn btn-danger boton" type="submit" value="Actualizar">
            </div>
        </fieldset>
    </form>
</main>

<?php
incluirTemplate('footer');
?>