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
    <link href="CSS/EstiloCCampañas.css" rel="stylesheet" type="text/css"/>
    
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
                            <li><a href="#">Atencion a Domicilio</a></li>
                            <li><a href="CConsultaInternet.php">Consultas online</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Adopciones</a></li>
                </ul>
            </nav>
        </div>
            <div class="body-m">
                <div class="card-campaña">
                    <div class="face front">
                        <img src="Imagenes/catalogo/Campañas/Antiparasitaria.jpg" alt="">
                        <h3>Campaña antiparasitaria</h3>
                    </div>
                    <div class="face back">
                        <h3>Campaña antiparasitaria</h3>
                        <p>Los antiparasitarios se emplean como método de prevención para ayudar 
                            a que tu mascota permanezca libre de parásitos a lo largo del año.</p>
                        <p>Visite nuestro local desde el 1 de mayo hasta el 31 de mayo del 2023.</p>
                        <div class="link-c">
                            <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                                <h4>!Pide tu cita!</h4></a>
                        </div>
                    </div>
                </div>
                <div class="card-campaña">
                <div class="face front">
                    <img src="Imagenes/catalogo/Campañas/Esterilizacion.jpg" alt="">
                    <h3>Campaña de esterilización</h3>
                </div>
                <div class="face back">
                    <h3>Campaña de esterilización</h3>
                    <p>La esterilización es una intervención sencilla y segura,
                        en la que se extraen los órganos reproductores de la mascota,
                        evitando numerosos problemas de salud, muchos de ellos de origen hormonal.</p>
                    <p>Visite nuestro local desde el 1 de mayo hasta el 31 de mayo del 2023.</p>
                    <div class="link-c">
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <h4>!Pide tu cita!</h4></a>
                    </div>
                </div>
                </div>
                <div class="card-campaña">
                <div class="face front">
                    <img src="Imagenes/catalogo/Campañas/AlimentacionSaludable.jpg" alt="">
                    <h3>Campaña alimentación saludable</h3>
                </div>
                <div class="face back">
                    <h3>Campaña saludable</h3>
                    <p>Una buena alimentación es vital para tu compañero peludo,
                        siendo un factor clave para su bienestar y calidad de vida.
                       En veterinaria DoctorPet estamos ofreciéndote no solo los mejores piensos
                       sino también asesoramiento profesional que te ayude a darle la mejor la dieta a tu mascota.</p>
                    <p>Visite nuestro local desde el 1 de mayo hasta el 31 de mayo del 2023.</p>
                    <div class="link-c">
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <h4>!Pide tu cita!</h4></a>
                    </div>
                </div>
            </div>
                <div class="card-campaña">
                <div class="face front">
                    <img src="Imagenes/catalogo/Campañas/HigieneMascotas.jpg" alt="">
                    <h3>Campaña de higiene de mascotas</h3>
                </div>
                <div class="face back">
                    <h3>Campaña de higiene</h3>
                    <p>Una mascota limpia es una mascota más sana, guapa y feliz.
                        Dale a tu compañero peludo el cuidado y atención que se merece con 
                        veterinaria DoctorPet y presume de mascota.</p>
                    <p>Visite nuestro local desde el 1 de mayo hasta el 31 de mayo del 2023.</p>
                    <div class="link-c">
                        <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                            <h4>!Pide tu cita!</h4></a>
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