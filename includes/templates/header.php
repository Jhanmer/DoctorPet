<?php
session_start();
if (isset ($_SESSION["cargo"])) {
    $Cargo = $_SESSION["cargo"];
}else{
    $Cargo = null;
}
$nombreUsuario = isset($_SESSION["NombreUsuario"]) ? $_SESSION["NombreUsuario"] : "";

$idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
$nombreUser = isset($_SESSION["nombre"]) ? $_SESSION["nombre"] : "";
$apeUser = isset($_SESSION["apellidos"]) ? $_SESSION["apellidos"] : "";

include "Config/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.Pet</title>
    <link rel="stylesheet" href="/estilos/css/normalize.css">
    <link rel="stylesheet" href="/estilos/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/estilos/css/header.css">
    <link rel="stylesheet" href="/estilos/css/footer.css">
    <link rel="stylesheet" href="/estilos/css/contacto.css">
    <link rel="stylesheet" href="/estilos/css/body.css">
    <link rel="stylesheet" href="/estilos/css/formulario.css">
    <link href="CSS/EstiloRegistro_Cliente.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="/CSS/normalize.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preload" href="/CSS/style.css" as="style" type="text/css">
    <link rel="stylesheet" href="/CSS/style.css" type="text/css">

    <link href="CSS/EstilosC.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloCCampañas.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/EstiloCConsultaInternet.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Icons font CSS-->
    <link href="estilos/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="estilos/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="estilos/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="estilos/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="estilos/css/main.css" rel="stylesheet" media="all">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

    

	<!-- Google font 
    CONSULTA PERSONALIDAZA
    -->
	
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="estilos/css/bootstrap.min.css" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="estilos/css/style-consulta.css" />

    <link href="CSS/tabla.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/style-tabla.css">
    <style>
        .item:hover .submenu {
            display: block;
        }

        .submenu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .submenu a {
            color: black;
            padding: 12px 16px;
            display: block;
            text-decoration: none;
        }

        .submenu a:hover {
            background-color: #f1f1f1;
        }
    </style>

</head>

<body>

    <header>

        <div class="container-fluid">

            <div class="navb-logo">
                <a href="index.php">
                    <img src="/estilos/img/DP-DoctorPet.png" alt="Logo">
                </a>

            </div>

            <div class="navb-items d-none d-xl-flex">

                <div class="item">
                    <a href="index.php">Inicio</a>
                </div>

                <div class="item">
                    <a>Servicio</a>
                    <div class="submenu">
                        <a href="Consulta.php">Consultas</a>
                        <a href="BanioCortes.php">Baños y Cortes</a>
                        <a href="Campanias.php">Campañas</a>
                        <a href="AnimalesPerdidos.php">Animales Perdidos</a>
                        <a href="AtencionDomicilio.php">Atencion a domicilio</a>
                        <a href="ConsultasOnline.php">Consultas online</a>
                    </div>
                </div>

                <div class="item">
                    <a>Productos</a>
                    <div class="submenu">
                    <a hidden href="CVestimenta.php">Vestimentas</a>
                    <a href="CMedicamentos.php">Medicamentos</a>
                    <a href="CAlimentos.php">Alimentos</a>
                    <a href="CAccesorios.php">Accesorios</a>
                    </div>
                </div>

                <div class="item">
                    <!-- <a href="contacto.php">Contactanos</a> -->
                </div>

                <div class="item">
                     <a href="nosotros.php">Nosotros</a> 
                </div>
                <?php
                    if($Cargo == "Usuario"){
                            echo "
                            <div class='item'>
                            <a>Mascotas</a>
                                <div class='submenu'>
                                    <a href='MisMascotas.php'>Ver Mis Mascota</a>
                                    <a href='mascota.php'>Registrar Mascota</a>
                                </div>
                                
                            </div>
                            <div class='item'>
                            <a>Citas</a>
                                <div class='submenu'>
                                <a hidden href='ConsultaPersonalizada.php'>Cita Personal - No</a>
                                <a href='CReservarCita.php'>Reservar Cita</a>
                                <a href='ListaReseva.php'>Lista de Reservas</a>
                                </div>
                            </div>
                            ";
                        }
                ?>
                
                <div class="item">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <?php
                    if($Cargo != "Usuario"){
                        echo "
                        <div class='item-button'>
                            <a href='../login.php' type='button'>Iniciar Sesion</a>
                        </div>";
                    }
                ?>
                <?php
                    if($Cargo == "Usuario"){                      
                        echo "
                        <nav class='header-nav ms-auto'>
                            <li class='nav-item dropdown pe-3'>
                                <a class='nav-link nav-profile d-flex align-items-center pe-0 show' href='#' data-bs-toggle='dropdown'>
                                    <img src='Imagenes/login.png' alt='Profile' class='rounded-circle' style='width: 40px; height: 40px;'>
                                    <span class='d-none d-md-block dropdown-toggle ps-3'>$nombreUser $apeUser</span>
                                </a>
                                <ul class='dropdown-menu dropdown-menu-end dropdown-menu-arrow profile' data-popper-placement='bottom-end' style='position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-16px, 38px);'>
                                    <li>
                                        <a class='dropdown-item d-flex align-items-center' href='#'>
                                            <i class='bi bi-person'></i>
                                            <span>Mi perfil</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class='dropdown-divider'>
                                    </li>
                                    <li>
                                        <a class='dropdown-item d-flex align-items-center' href='#'>
                                            <i class='bi bi-gear'></i>
                                            <span>Configuración</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class='dropdown-divider'>
                                    </li>
                                    <li>
                                        <a class='dropdown-item d-flex align-items-center' href='#'>
                                            <i class='bi bi-question-circle'></i>
                                            <span>Mi lista de Citas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class='dropdown-divider'>
                                    </li>
                                    <li>
                                        <a class='dropdown-item d-flex align-items-center' href='/Config/Salir.php'>
                                            <i class='bi bi-box-arrow-right'></i>
                                            <span>Cerrar sesión</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </nav>   
                        ";
                    }
                ?>
            </div>
            <!-- 
            Button trigger modal -->
            <div class="mobile-toggler d-lg-none">
                <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <img src="/estilos/img/DP-DoctorPet.png" alt="Logo">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>

                        <div class="modal-body">

                            <div class="modal-line">
                                <i class="fa-solid fa-house"></i><a href="index.php">Inicio</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-bell-concierge"></i><a href="servicios.php">Servicios</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-file-lines"></i> <a href="productos.php">Productos</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-circle-info"></i><a href="contacto.php">Contacto</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-circle-info"></i><a href="nosotros.php">Nosotros</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>

                            <a href="login.php" class="navb-button" type="button">Iniciar sesion</a>
                        </div>

                        <div class="mobile-modal-footer">

                            <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>