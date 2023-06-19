<?php
session_start();
if (isset($_SESSION["cargo"])) {
    $Cargo = $_SESSION["cargo"];
} else {
    $Cargo = null;
}
$nombreUsuario = isset($_SESSION["NombreUsuario"]) ? $_SESSION["NombreUsuario"] : "";
$idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
//conexion
require "../Config/conexion_bd.php";
$db = fnConnect($con);

//Validar la URL
$id = $_GET['idAccesorio'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if(!$id){
    header('Location: /admin-dashboard/accesorios.php');
}

$consulta = "SELECT * FROM accesorio WHERE idAccesorio = $id";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);


//(Alimento)

//validamos los datos una ves ingresado
$errores = [];

$nombre = $propiedad['nombre'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$stock =$propiedad['stock'];
$imagenPropiedad = $propiedad['imagen'];

//Despues ingresamos los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* echo '<pre>';
    var_dump($_POST);
    echo '</pre';

    echo '<pre>';
    var_dump($_FILES);
    echo '</pre'; */
    
    

    //filtramos los datos
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']) ;
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']) ;
    /* $imagen = mysqli_real_escape_string($db, $_POST['imagen']) ; */
    $stock = mysqli_real_escape_string($db, $_POST['stock']);

    //asignamos files hacia una variable

    $imagen = $_FILES['imagen'];
   

    if (!$nombre) {
        $errores[] = "El Nombre es Obligatorio*";
    }
    if (!$precio) {
        $errores[] = "El Precio es Obligatorio*";
    }
    if (!$descripcion) {
        $errores[] = "La Descripción es Obligatorio y debe tener almenos 10 caracteres*";
    }
    if (!$stock) {
        $errores[] = "El Stock es Obligatorio*";
    }

    /*  echo '<pre>';
    var_dump($errores);
    echo '</pre>';
    exit; */

    if (empty($errores)) {
        /* SUBIDA DE ARCHIVOS */
    //php permite crear carpetas - Subida de archivos
    // Crear carpeta
    $carpetaImagenes = '../imagenes2/';
 
    if (!is_dir($carpetaImagenes)) { /* is_dir funcion para ver si una carpeta existe o no */
        mkdir($carpetaImagenes);
    }
 
    $nombreImagen = $propiedad['imagen'];
 
    //Evitar redundancia de imagenes al momento de actualizar
    if ($imagen['name']) { /* en caso de que la imagen no sea un string vacio  */
        
        if (!empty($propiedad['imagen'])) {
            // Eliminar imagen previa solo si hay una imagen actual
            unlink($carpetaImagenes . $propiedad['imagen'] . ".jpg");
        }
        
        // Generar un nombre único 
        /* Dato: md5 funcionaba antiguamente para generar un hash, funciones que generan numero aleartoriamente */
        $nombreImagen = md5(uniqid(rand(), true));
 
        //Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen . ".jpg");
    }
   

        //Insertar en la base de datos
        $query = "UPDATE accesorio SET nombre = '$nombre', descripcion = '$descripcion', imagen = '$nombreImagen' , precio = '$precio', stock = '$stock' 
        WHERE idAccesorio = $id";


        //almacenando a la bd
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            //redicreccionando 
            //pasando los datos a otra pantalla
            header('Location: /admin-dashboard/accesorios.php?update=Actualizado Correctamente&registrado=1');
        }
    }
}


include "../Config/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel-Doctor Pet</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <style>
        table.propiedades .imagen-tabla{
            width: 100px;
        }
        .boton{
            width: 100px;
        }
        .update-imagen{
            width: 200px;
        }
    </style>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo" style="color: black;">
                            <h2>&copy;DoctorPet <i class="fa-solid fa-paw fa-beat"></i></h2>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <!--  <li class="sidebar-title">Menu</li> -->

                        <li class="sidebar-item active ">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Menu</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>

                                <span>Alimento</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="crear-alimento.php">Nuevo Producto</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="alimentos.php">Lista de Alimentos</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="update-alimento.php"><i class="fa-solid fa-pen-to-square"></i> Actualizar</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>

                                <span>Medicamentos</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="crear-medicamento.php">Nuevo Producto</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="medicamentos.php">Lista de medicamentos</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="update-medicamento.php"><i class="fa-solid fa-pen-to-square"></i> Actualizar</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>

                                <span>Accesorios</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="crear-acce.php">Nuevo Accesorio</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="accesorios.php">Lista De Accesorios</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="update-acce.php"><i class="fa-solid fa-pen-to-square"></i> Actualizar</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Registros</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="TClientes.php">Clientes</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="TTrabajadores.php">Trabajadores</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="TMascotas.php">Mascotas</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="TMPerdidas.php">Animales Perdidos</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="TConsultas.php">Consultas</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="application-gallery.html" class='sidebar-link'>
                                <i class="bi bi-image-fill"></i>
                                <span>Nuestras Mascotas</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>

                                <span>Campañas</span>
                            </a>
                        </li>



                        <li class="sidebar-title">Soporte</li>

                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>

                                <span>Desarrolladores</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>