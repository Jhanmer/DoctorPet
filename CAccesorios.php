<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
    <title>Restaurante Pihuicho</title>
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
                <li><a href="#"><i class="fas fa-qrcode"></i>Medicamentos</a></li>
                <li><a href="#"><i class="fas fa-qrcode"></i>Alimento</a></li>
                <li><a href="CAccesorios.php"><i class="fas fa-qrcode"></i>Accesorios</a></li>
            </ul>
        </div>
        <div class="logo">
            <a href="#"><img src="Imagenes/LOGO.jpg" alt="" /></a>
        </div>

        <div class="Busqueda">
            <input type="text" placeholder="Buscar platos">
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
                            <li><a href="#">Consultas online</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Adopciones</a></li>
                </ul>
            </nav>
        </div>

        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/arañador60.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Arañador</h3>
                    <p>Accesorio para gatos</p><br>
                    <h3>S/.60</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/botasgato8.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Botas</h3>
                    <p>Accesorio para gatos</p><br>
                    <h3>S/.8</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/cama 30.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Cama</h3>
                    <p>Para animales pequeños</p><br>
                    <h3>S/.30</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/cama51x7x66 50.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Cama</h3>
                    <p>Dimensiones: 51x7x66 cm</p><br>
                    <h3>S/.50</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/cepillo10.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Cepillo</h3>
                    <p>Extrae pelaje de gato</p><br>
                    <h3>S/.10</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/cepillogato20.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Cepillo</h3>
                    <p>Tiene boton para expulsar el pelo</p><br>
                    <h3>S/.20</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/cortauñasgato10.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Cortauñas</h3>
                    <p>Preferible en gatos</p><br>
                    <h3>S/.10</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir Caldo de Gallina">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/jaula100.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Jaula</h3>
                    <p>Transporte de animales pequeños</p><br>
                    <h3>S/.100</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/mochilagato100.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Mochila</h3>
                    <p>Transporte para gatos</p><br>
                    <h3>S/.100</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/pelotaperro10.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Pelota</h3>
                    <p>Juguete para perro</p><br>
                    <h3>S/.10</h3>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Pedido</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="Imagenes/catalogo/accesorios/sogaconpelota25.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Soga con Pelota</h3>
                    <p>Juguete para perro</p><br>
                    <h3>S/.25</h3>
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