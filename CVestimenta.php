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

        <div class="info-header">
            <nav>
                <a href="#">Registrate</a>
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
                            <li><a href="#">Consultas</a></li>
                            <li><a href="CBañosCortes.php">Baño y Corte</a></li>
                            <li><a href="CCampañas.php">Campañas</a></li>
                            <li><a href="CAnimalesPerdidos.php">Animales Perdidos</a></li>
                            <li><a href="#">Atencion a Domicilio</a></li>
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
                    <img src="Imagenes/catalogo/vestimenta/Ropacapucha30.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Chompa Tejida </h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.30</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/camisa35.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Camisa Miel</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.35</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/camisa50.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Camisa Amarilla</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.50</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>

            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/chaleco 40.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Chaleco Marron</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.40</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/falda20.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Falda</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.20</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/flores15.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Chompa floral</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.15</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/futbol15.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Polo Futbol</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.15</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir Caldo de Gallina">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/ropa10.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Polo Monstruo</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.10</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/ropamickey10.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Polo Mickey</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.10</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/ropastich35.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Traje Stich</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.35</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/chaleco30.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Chaleco Rojo</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.30</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/vestimenta/ropapolar30.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Ropa Polar</h3>
                    <p>TALLAS XS S M L</p><br>
                    <h3>S/.30</h3>
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