<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Imagenes/LOGO.jpg">
    <title>Doctor Pet</title>
    <link href="CSS/EstiloBFila.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="CSS/EstiloC.css" rel="stylesheet" type="text/css" />
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

        <div class="Busqueda">
            <input type="text" placeholder="Buscar">
            <div class="btn">
                <i class="fa fa-search"></i>
            </div>
        </div>

        <div class="info-header">
            <nav>
                <a href="RegistroC.php">Registrate</a>
                <a href="#">Iniciar Sesion</a>
            </nav>
        </div>

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
                </ul>
            </nav>
        </div>

        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/lucas.jpeg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: Lucas</h3>
                    <p><strong>Fecha:</strong> 22 de Abril</p>
                    <p><strong>Visto Ultimamente:</strong> Real Plaza VMT</p>
                    <p><strong>Numero de contacto:</strong> 987 987 654</p>
                    <p><strong>Tamaño:</strong> 60cm</p>
                    <p><strong>Características:</strong> Tiene un collar con un PIN donde esta su nombre, tiene un mancha en la pata derecha</p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/carmen.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: Carmen</h3>
                    <p><strong>Fecha:</strong> 21 de Abril</p>
                    <p><strong>Visto Ultimamente:</strong> Por el Macro de Villa el Salvador</p>
                    <p><strong>Numero de contacto:</strong> 987 987 652</p>
                    <p><strong>Tamaño:</strong> 15cm</p>
                    <p><strong>Características:</strong> Tiene un collar con un PIN donde esta su nombre.</p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/perico.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: Perico</h3>
                    <p><strong>Fecha:</strong> 19 de Abril</p>
                    <p><strong>Visto Ultimamente:</strong> Club metropolitano Huayna Cápac</p>
                    <p><strong>Numero de contacto:</strong> 987 987 651</p>
                    <p><strong>Tamaño:</strong> 15cm</p>
                    <p><strong>Características:</strong> Tiene un collar con un PIN donde esta su nombre.</p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
                </div>
            </div>

        </div>
         <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/blaki.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: Blacki</h3>
                    <p><strong>Fecha:</strong> 18 de Abril</p>
                    <p><strong>Visto Ultimamente:</strong> Terminal Pesquero VMT</p>
                    <p><strong>Numero de contacto:</strong> 987 987 650</p>
                    <p><strong>Tamaño:</strong> 60cm</p>
                    <p><strong>Características:</strong> Tiene un collar con un PIN donde esta su nombre.</p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/pandi.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: Pandi</h3>
                    <p><strong>Fecha:</strong> 23 de Abril</p>
                    <p><strong>Visto Ultimamente:</strong> Av. Union, paralelo a la estación del tren</p>
                    <p><strong>Numero de contacto:</strong> 987 987 251</p>
                    <p><strong>Tamaño:</strong> 15cm</p>
                    <p><strong>Características:</strong> Tiene un collar con un PIN donde esta su nombre.</p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
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