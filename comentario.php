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
$tele = isset($_SESSION["Telefono"]) ? $_SESSION["Telefono"] : "";
include "Config/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.Pet</title>
    <link rel="stylesheet" href="/estilos/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/estilos/css/header.css">
    <link rel="stylesheet" href="/estilos/css/footer.css">
    <link rel="stylesheet" href="/estilos/css/comentario.css">
    <link href="CSS/EstiloRegistro_Cliente.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="/estilos/css/MostarComentario.css">


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
                            <div class='item'>
                            <a href='comentario.php'>Comentarios</a>                                
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
    <!-- Comentario -->
    <section>
        
        <form class="formulario" method="post"> 
        <?php include 'Controlador/Ctrl_Comentario.php';?> 
        <fieldset>
                <legend>DEJANOS TU COMENTARIO!</legend>

                <div class="contenedor-campos">
                    <div class="campo">
                        <label>Nombre</label>
                        <input class="input-text" type="text"  name="nombre" readonly value="<?php echo $_SESSION['nombre']; ?>" required>
                    </div> 

                    <div class="campo">
                        <label>Mensaje</label>
                        <textarea class="input-text" name="comentario" placeholder="¿Que te parece nuestro servicio?"></textarea>
                    </div>
                </div> <!-- .contenedor-campos --> 
                <div class="alinear-derecha flex">
                    <input class="btn btn-danger boton" type="submit" name="enviar" value="Registrar" id="enviar">
                </div>

            </fieldset>
        </form>
    </section>
                


       <?php

        $busc= mysqli_query($con, $sql);

        if($busc -> num_rows >0){
            while($row= mysqli_fetch_array($busc)){
          
        
        ?>            

        <ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="http://creaticode.com/blog"><?php echo $row['nombre']; ?></a></h6>
							<span>hace 20 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
                        <?php echo $row['comentario']; ?>
						</div>
					</div>
				</div>
			</li>

		</ul>




        <?php
}
}

?>




 
    
</body>

</html>
