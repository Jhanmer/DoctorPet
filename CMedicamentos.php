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
    <title>Doctor Pet</title>
    <link href="CSS/EstiloBarraFila.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="CSS/EstilosC.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloBLateral.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloBotonSearch.css" rel="stylesheet" type="text/css" />
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
            <h2>PRODUCTOS</h2>
            <ul>
                <li><a href="CVestimenta.php"><i class="fas fa-qrcode"></i>Vestimenta</a></li>
                <li><a href="CMedicamentos.php"><i class="fas fa-qrcode"></i>Medicamentos</a></li>
                <li><a href="CAlimento.php"><i class="fas fa-qrcode"></i>Alimento</a></li>
                <li><a href="CAccesorios.php"><i class="fas fa-qrcode"></i>Accesorios</a></li>
            </ul>
        </div>
        <div class="logo">
            <a href="#"><img src="Imagenes/LOGO.jpg" alt="" /></a>
        </div>

        <div class="Busqueda">
            <input type="text" placeholder="Buscar">
            <div class="btn">
                <i class="fa fa-search"></i>
            </div>
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

        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/medicamentos/cefavet-300-precio-lima-peru.jpeg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Cefalexina</h3>
                    <p>Cefavet 300 mg x 1 Tableta</p><br>
                    <h3>S/.2.00</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/medicamentos/floxatel-100-enrofloxacino-precio-peru.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Enrofloxacina</h3>
                    <p>FLOXATEL 100 mg x tableta</p><br>
                    <h3>S/.2.50</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/medicamentos/doxitel-200-para-que-sirve-precio.jpeg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Doxiciclina</h3>
                    <p>Doxitel 200 mg x 1 Tableta</p><br>
                    <h3>S/.2.80</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/medicamentos/rimadyl-25mg-precio-peru.jpeg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Rimadyl</h3>
                    <p>Antiinflamatorio 25 mg x 1 Tableta</p><br>
                    <h3>S/.4.50</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/medicamentos/alerflam-dosis-gatos-perros.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>ALERFLAM</h3>
                    <p>Dosis en Perros y Gatos</p><br>
                    <h3>S/.13.50</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/medicamentos/HISTAPET-PRECIO-PERÚ-1.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>HISTAPET</h3>
                    <p>Cetirizina 10 mg x 10 tabletas</p><br>
                    <h3>S/.12.60</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/medicamentos/micopet-ketoconazol-precio-lima-peru-animarket.jpeg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>MICOPET</h3>
                    <p>Ketoconazol 200 mg x 8 Pastillas</p><br>
                    <h3>S/.15.00</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir Caldo de Gallina">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/medicamentos/power-ultra-2-a-4-Animarket.jpeg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Power Ultra</h3>
                    <p>2 a 4 kg</p><br>
                    <h3>S/.20.50</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
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