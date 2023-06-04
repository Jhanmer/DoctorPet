<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>

<!-- Carrusel -->
<div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="estilos/img/retrato-grupo-adorables-cachorros.jpg" class="d-block w-100" alt="Imagen Carrusel 1">
                <div class="carousel-caption top-0 d-none d-md-block">
                    <h1 class="display-1 fw-bolder text-capitalize">Reserva tu cita</h1>
                    <h5 class="mt-5 fs-3 text-uppercase">ESTAMOS PARA SERVIRTE</h5>
                    <button class="btn btn-primary px-4 f2-5 mt-5 boton"><a href="Consulta.php">!Registra Cita Aquí!</a></button>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="estilos/img/73977.jpg" class="d-block w-100" alt="Imagen Carrusel 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ESTAMOS PARA SERVIRTE</h5>
                    <p>Bienvenido a Clínica Veterinaria DoctorPer&copy; </p>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="estilos/img/73965.jpg" class="d-block w-100" alt="Imagen Carrusel 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ESTAMOS PARA SERVIRTE</h5>
                    <p>Bienvenido a Clínica Veterinaria DoctorPer&copy; </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon flecha" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon flecha" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <main class="contenedor">
        <div class="info-header">
            <div class="info-1">
                <div class="icono"><i class="fa-solid fa-notes-medical"></i></div>
                <div class="texto">
                    <h3>Farmacia y veterinaria</h3>
                    <p>Prevenga enfermedades que puedan dañar a tu mascota.</p>
                </div>
                <button type="button" class="btn btn-primary boton">Leer mas</button>
            </div>
            <div class="info-1">
                <div class="icono"><i class="fa-solid fa-dog"></i></div>
                <div class="texto">
                    <h3>Juguetes y otros</h3>
                    <p>Juguetes duraderos, muy divertidos para tus mascotas.</p>
                </div>
                <button type="button" class="btn btn-primary boton">Leer mas</button>
            </div>
            <div class="info-1">
                <div class="icono"><i class="fa-solid fa-bone"></i></div>
                <div class="texto">
                    <h3>Alimentos</h3>
                    <p>Alimenta a tu explorador con una dieta alta en proteínas para alimentar sus aventuras.</p>
                </div>
                <button type="button" class="btn btn-primary boton">Leer mas</button>
            </div>
            <div class="info-1">
                <div class="icono"><i class="fa-solid fa-cookie-bite"></i></div>
                <div class="texto">
                    <h3>Golosinas o Snacks</h3>
                    <p>Cero granos, gluten, trigo, maíz, soja, papas, comidas de subproductos avícolas.
                    </p>
                </div>
                <button type="button" class="btn btn-primary boton">Leer mas</button>
            </div>
        </div>
        <!-- Productos para Gatos -->
        <div class="tema-producto">
            <h2>PARA LOS ENGREIDOS DEL HOGAR</h2>
        </div>

        <section class="producto">
            <div class="producto-base">
                <div class="imagen">
                    <img src="estilos/img/perro/can1.jpg" alt="">
                </div>
                <div class="texto">
                    <h4>Producto1</h4>
                    <p>Alimenta a tu explorador con una dieta alta en proteínas para alimentar sus aventuras.</p>
                    <h4>S/.12.00</h4>
                    <button type="button" class="btn btn-danger boton">Agregar al carrito</button>
                </div>
            </div>
            

        </section><!-- fin de productos para gatos -->

        <!-- Productos para Gatos -->
        <div class="tema-producto">
            <h2>ALIMENTO PARA TUS FELINOS</h2>
        </div>

        <section class="producto">
            <div class="producto-base">
                <div class="imagen">
                    <img src="estilos/img/gato/5.jpg" alt="">
                </div>
                <div class="texto">
                    <h4>Producto1</h4>
                    <p>Alimenta a tu explorador con una dieta alta en proteínas para alimentar sus aventuras.</p>
                    <h4>S/.12.00</h4>
                    <button type="button" class="btn btn-danger boton">Agregar al carrito</button>
                </div>
            </div>
            

        </section><!-- fin de productos para gatos -->


    </main>
    <!--contenedor-nosotros  -->
    <section class="nosotros -contenido" id="nosotros">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="estilos/img/nosotros/slider-n-1.jpg" class="d-block w-100" alt="imagen">
                </div>
                <div class="carousel-item">
                    <img src="estilos/img/nosotros/slider-n-2.jpg" class="d-block w-100" alt="imagen">
                </div>
                <div class="carousel-item">
                    <img src="estilos/img/nosotros/slider-n-3.jpg" class="d-block w-100" alt="imagen">
                </div>
                <div class="carousel-item">
                    <img src="estilos/img/nosotros/slider-n-4.jpg" class="d-block w-100" alt="imagen">
                </div>
            </div>
            <button class="carousel-control-prev flecha-1" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next flecha-1 " type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--  -->
    </section>

<?php 
    incluirTemplate('footer');
?>



