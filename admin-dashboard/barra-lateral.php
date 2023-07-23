<?php
session_start();
if (isset($_SESSION["cargo"])) {
    $Cargo = $_SESSION["cargo"];
} else {
    $Cargo = null;
}
$nombreUsuario = isset($_SESSION["NombreUsuario"]) ? $_SESSION["NombreUsuario"] : "";
$idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
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
    


    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

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
                                <li class="submenu-item ">
                                    <a href="TReservarCitas.php">Reservas de Citas</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item  ">
                            <a href="TMascotas.php" class='sidebar-link'>
                                <i class="bi bi-image-fill"></i>
                                <span>Nuestras Mascotas</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="VentasGeneradas.php" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Ventas Generadas</span>
                            </a>
                        </li>

                        <li hidden class="sidebar-item  ">
                            <a href="Campanias.php" class='sidebar-link'>
                                
                                <span>Campañas</span>
                            </a>
                        </li>

                        

                        <li class="sidebar-title">Soporte</li>

                        <li hidden class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                
                                <span>Desarrolladores</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>