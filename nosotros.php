<?php
require('includes/funciones.php');
incluirTemplate('header');
?>

<div class="container-fluid">


    <!-- Button trigger modal -->
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
                    <img src="estilos/img/DP-DoctorPet.png" alt="Logo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                </div>

                <div class="modal-body">

                    <div class="modal-line">
                        <i class="fa-solid fa-house"></i><a href="index.html">Inicio</a>
                    </div>

                    <div class="modal-line">
                        <i class="fa-solid fa-bell-concierge"></i><a href="servicios.html">Servicios</a>
                    </div>

                    <div class="modal-line">
                        <i class="fa-solid fa-file-lines"></i> <a href="productos.html">Productos</a>
                    </div>

                    <div class="modal-line">
                        <i class="fa-solid fa-circle-info"></i><a href="contacto.html">Contacto</a>
                    </div>

                    <div class="modal-line">
                        <i class="fa-solid fa-circle-info"></i><a href="nosotros.html">Nosotros</a>
                    </div>

                    <div class="modal-line">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <a href="login.html" class="navb-button" type="button">Iniciar sesion</a>
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

<!-- About Start -->
<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <h4 class="text-secondary mb-3">NOSOTROS</h4>
            <h1 class="display-4 mb-4"><span class="text-primary">MISION</span> <span class="text-secondary"></span></h1>
            <p class="mb-4">Brindar a los Pacientes y a sus Familiares servicios dignos con calidez y excelencia para otorgar los mejores tratamientos médicos hospitalarios, adquiriendo habilidades,
                destrezas y uso de nuevas tecnologías en la Práctica de la Medicina Veterinaria a los estudiantes de Licenciatura y Posgrado.</p>
            <li>
                <h5><i class="fa fa-check-double text-secondary mr-3"></i>Best In Industry</h5>
            </li>
            <li>
                <h5><i class="fa fa-check-double text-secondary mr-3"></i>Emergency Services</h5>
            </li>
            <li>
                <h5><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5>
            </li>
            </ul>
        </div>
        <div class="col-lg-5">
            <div class="row px-3">

                <div class="col-6 p-0">
                    <img class="img-fluid w-100" src="Imagenes/nosotros/about-2.jpg" alt="">
                </div>
                <div class="col-6 p-0">
                    <img class="img-fluid w-100" src="Imagenes/nosotros/about-3.jp2" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="Imagenes/nosotros/visi.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h1 class="display-4 mb-4"><span class="text-primary">VISION</span> </h1>
                <p class="mb-4">Ser un Hospital Veterinario reconocido por regirse con normas de bienestar animal y de excelencia profesional,
                    donde estudiantes e investigadores generen conocimientos en la Práctica de la Medicina Veterinaria.</p>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">El Mejor de la Zona</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Servicio de Emergencia</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Cuidado Especial</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Ayuda Especializada</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->



<!-- Team Start -->

<div style="margin-top: 5rem; padding-top: 5rem; padding-bottom: 3rem;">
    <div style="display: flex; flex-direction: column; text-align: center; margin-bottom: 5rem;">
        <h4 style="color: #6c757d; margin-bottom: 1.5rem;">Team Member</h4>
        <h1 style="font-size: 2.5rem; margin: 0;">Meet Our <span style="color: #007bff;">Team Member</span></h1>
    </div>
    <div style="display: flex; flex-wrap: wrap; justify-content: center;">
        <div style="width: 300px; margin-bottom: 1rem; margin-right: 1rem;">
            <div style="position: relative; overflow: hidden; border: none; margin-bottom: 1rem;">
                <img style="width: 100%; height: auto;" src="Imagenes/nosotros/admin.jpg" alt="">
                <div style="padding: 0;">
                    <div style="display: flex; flex-direction: column; justify-content: center; background-color: #f8f9fa; padding: 1rem;">
                        <h5 class="text-center">admin</h5>
                        <i>ADMINISTRADOR</i>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; background-color: #343a40;">
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-twitter" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-facebook-f" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-linkedin-in" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px;"><i class="fab fa-instagram" style="color: #007bff;"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 300px; margin-bottom: 1rem; margin-right: 1rem;">
            <div style="position: relative; overflow: hidden; border: none; margin-bottom: 1rem;">
                <img style="width: 100%; height: auto;" src="Imagenes/nosotros/veter.avif" alt="">
                <div style="padding: 0;">
                    <div style="display: flex; flex-direction: column; justify-content: center; background-color: #f8f9fa; padding: 1rem;">
                        <h5 class="text-center">veterinario</h5>
                        <i>VETERINARIO</i>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; background-color: #343a40;">
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-twitter" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-facebook-f" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-linkedin-in" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px;"><i class="fab fa-instagram" style="color: #007bff;"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 300px; margin-bottom: 1rem; margin-right: 1rem;">
            <div style="position: relative; overflow: hidden; border: none; margin-bottom: 1rem;">
                <img style="width: 100%; height: auto;" src="Imagenes/nosotros/estilsit.avif" alt="">
                <div style="padding: 0;">
                    <div style="display: flex; flex-direction: column; justify-content: center; background-color: #f8f9fa; padding: 1rem;">
                        <h5 class="text-center">estilista</h5>
                        <i>ESTILISTA</i>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; background-color: #343a40;">
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-twitter" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-facebook-f" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-linkedin-in" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px;"><i class="fab fa-instagram" style="color: #007bff;"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 300px; margin-bottom: 1rem;">
            <div style="position: relative; overflow: hidden; border: none; margin-bottom: 1rem;">
                <img style="width: 100%; height: auto;" src="Imagenes/nosotros/cajero.jpg" alt="">
                <div style="padding: 0;">
                    <div style="display: flex; flex-direction: column; justify-content: center; background-color: #f8f9fa; padding: 1rem;">
                        <h5 class="text-center">cajero</h5>
                        <i>CAJERO</i>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: center; background-color: #343a40;">
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-twitter" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-facebook-f" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; margin-right: 0.5rem;"><i class="fab fa-linkedin-in" style="color: #007bff;"></i></a>
                        <a href="#" style="border: 1px solid #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; width: 36px; height: 36px;"><i class="fab fa-instagram" style="color: #007bff;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Team End -->


</main>


<?php
include './includes/templates/footer.php';

?>