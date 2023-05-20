<?php 
    require "Config/conexion_bd.php";
    $con = fnConnect($msg);
?>

<?php
session_start();
if (isset ($_SESSION["cargo"])) {
    $Cargo = $_SESSION["cargo"];
}else{
    $Cargo = null;
}
include "Config/conexion.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Imagenes/LOGO.jpg">
    <title>Doctor Pet - Animales Perdidos</title>
    <link href="CSS/EstiloBarraFila.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="CSS/EstilosC.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloBLateral.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloHContenedor.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloPiePagina.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <header>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <h2>SERVICIOS</h2>
            <ul>
                <li><a href="CConsulta.php.php"><i class="fas fa-qrcode"></i>Consulta</a></li>
                <li><a href="CBañosCortes.php"><i class="fas fa-qrcode"></i>Baños y Cortes</a></li>
                <li><a href="CCampañas.php"><i class="fas fa-qrcode"></i>Campañas</a></li>
                <li><a href="CAnimalesPerdidos.php"><i class="fas fa-qrcode"></i>Animales Perdidos</a></li>
                <li><a href="AtencionDomicilio.php"><i class="fas fa-qrcode"></i>Atencion a Domicilio</a></li>
                <li><a href="CConsultaInternet.php"><i class="fas fa-qrcode"></i>Consultas por Internet</a></li>
            </ul>
        </div>
        <div class="logo">
            <a href="#"><img src="Imagenes/LOGO.jpg" alt="" /></a>
        </div>                       
        <?php
                if($Cargo != "Usuario"){
                    echo "
                    <div class='info-header'>
                        <nav>
                            <a href='RegistroC.php'>Registrate</a>
                            <a href='login/index.php'>Iniciar Sesion</a>
                        </nav>
                    </div>";
                }
        ?>
        <?php
            if($Cargo == "Usuario"){
                echo "<div class='info-header'>
                        <nav>
                            <a href='Config/salir.php'>Salir</a>
                        </nav>
                    </div>";
            }
        ?>                       
    </header>
    <main>
        <div class="Barra-main">
            <nav>
                <ul class="menu-horizontal">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li>
                        <a href="#">Productos</a>
                        <ul class="menu-vertical">
                            <li><a href="CVestimenta.php">Vestimenta</a></li>
                            <li><a href="CMedicamentos.php">Medicamentos</a></li>
                            <li><a href="CAlimentos.php">Alimentos</a></li>
                            <li><a href="CAccesorios.php">Accesorios</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Servicios</a>
                        <ul class="menu-vertical">
                            <li><a href="CConsultas.php">Consultas</a></li>
                            <li><a href="CBañosCortes.php">Baño y Corte</a></li>
                            <li><a href="CCampañas.php">Campañas</a></li>
                            <li><a href="CAnimalesPerdidos.php">Animales Perdidos</a></li>
                            <li><a href="CAtencionDomicilio.php">Atencion a Domicilio</a></li>
                            <li><a href="CConsultaInternet.php">Consultas online</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Adopciones</a></li>
                    <?php
                        if($Cargo == "Usuario"){
                            echo "<li><a href='RMascota.php'>Registrar Mascota</a></li>";
                        }
                    ?>

                </ul>
            </nav>
        </div>
        
        <div class="contenedor-botones-perdidos">
            <form action="" method="GET">
                <div class="boton-box2">
                    <input type="text" name="busqueda" placeholder="Búsqueda">
                    <input type="submit" name="enviar" value="Buscar">
                </div>
            </form>    
            <div class="boton-box">
                <a href="Ranimales_perdidos.php">Registrar mascota perdida</a>
            </div>
        </div>
        
        <div class="container">
            <?php 
            if(!isset($_GET['enviar'])){
                $sqlshow="select * from dp_mascota_perdida";
                $resultconsul= mysqli_query($con, $sqlshow);
                while($mostrarlost= mysqli_fetch_array($resultconsul)){       
            ?>
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/meperdi.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: <?php echo $mostrarlost['nombre_perdido'] ?> </h3>
                    <p><strong>Fecha:</strong> <?php echo $mostrarlost['fecha_perdido'] ?> </p>
                    <p><strong>Visto Ultimamente:</strong> <?php echo $mostrarlost['visto_perdido'] ?> </p>
                    <p><strong>Numero de contacto:</strong> <?php echo $mostrarlost['contacto_perdido'] ?> </p>
                    <p><strong>Tamaño:</strong> <?php echo $mostrarlost['tamanio_perdido'] ?> </p>
                    <p><strong>Características:</strong> <?php echo $mostrarlost['descripcion_perdido'] ?> </p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
                </div>
            </div>
            <?php 
                 }   
            }else 
                if(isset($_GET['enviar'])){
                    $busqueda = $_GET['busqueda'];
                    $consultaMP = $con->query("SELECT * FROM dp_mascota_perdida WHERE nombre_perdido LIKE '%$busqueda%' OR descripcion_perdido LIKE '%$busqueda%' "
                            . " OR fecha_perdido LIKE '%$busqueda%' OR visto_perdido LIKE '%$busqueda%' OR contacto_perdido LIKE '%$busqueda%' OR tamanio_perdido LIKE '%$busqueda%' ");
                    while($row = $consultaMP->fetch_array()){
                         
            ?>
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/meperdi.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: <?php echo $row['nombre_perdido'] ?> </h3>
                    <p><strong>Fecha:</strong> <?php echo $row['fecha_perdido'] ?> </p>
                    <p><strong>Visto Ultimamente:</strong> <?php echo $row['visto_perdido'] ?> </p>
                    <p><strong>Numero de contacto:</strong> <?php echo $row['contacto_perdido'] ?> </p>
                    <p><strong>Tamaño:</strong> <?php echo $row['tamanio_perdido'] ?> </p>
                    <p><strong>Características:</strong> <?php echo $row['descripcion_perdido'];  ?> </p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
                </div>
            </div>
            <?php 
                    }   
                }
            ?>
        </div> 
    </main>
    
    <footer class="footer">
        <div class="container-f">
            <div class="footer-row">
                <div class="footer-links">
                    <h4>Veterinaria</h4>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Nuestra tienda</a></li>
                        <li><a href="#">Trabaja con nosotros</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="#">Medios de pagos</a></li>
                        <li><a href="#">Preguntas frecuentes</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Redes Sociales</h4>
                    <div class="social-link">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>