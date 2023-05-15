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
    <link href="CSS/EstiloCConsultaInternet.css" rel="stylesheet" type="text/css"/>
    
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
                <li><a href="CConsultas.php"><i class="fas fa-qrcode"></i>Consulta</a></li>
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

        <div class="Busqueda">
            <input type="text" placeholder="Buscar">
            <div class="btn">
                <i class="fa fa-search"></i>
            </div>
        </div>

        <div class="info-header">
            <nav>
                <a href="Registro.php">Registrate</a>
                <a href="#">Iniciar Sesion</a>
                <a href="CAccesorios">Productos</a>
                <a href="CConsultas.php">Servicios</a>
            </nav>
        </div>
    </header>
        
        <main>
            <div class="consulta-body">
                <div class="consulta-container">
                    <div class="consulta-card">
                        <div class="left-column background1-left-column">
                            <h6>Veterinaria</h6>
                            <h2>DoctorPet</h2>
                            <i class="fa-sharp fa-solid fa-shield-dog"></i>
                        </div>
                        <div class="right-column">
                            <div>
                                <h4>Atención</h4>
                                <h6>08:00 a.m. - 18:00 p.m.</h6>
                            </div>
                            <h2>Atencion a Domicilio</h2>
                            <p>Nuestros veterinarios estarán siempre alerta a la necesidad de sus clientes.
                            Es por ello que si los necesitas en tu hogar ellos irán lo más rapido posible a acudir a tu llamado</p>
                            <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo registrar..." 
                               target="_blank" class="button background1-left-column">Contactanos</a>
                        </div>
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
