
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.Pet</title>
    <link rel="stylesheet" href="/estilos/css/normalize.css">
    <link rel="stylesheet" href="/estilos/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/estilos/css/header.css">
    <link rel="stylesheet" href="/estilos/css/footer.css">
    <link rel="stylesheet" href="/estilos/css/contacto.css">
    <link rel="stylesheet" href="/estilos/css/body.css">
    <link rel="stylesheet" href="/estilos/css/formulario.css">
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
                    <a href="servicios.php">Servicio</a>
                </div>

                <div class="item">
                    <a href="productos.php">Productos</a>
                </div>

                <div class="item">
                    <a href="contacto.php">Contactanos</a>
                </div>

                <div class="item">
                    <a href="nosotros.php">Nosotros</a>
                </div>

                <div class="item">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>

                <div class="item-button">
                    <a href="login.php" type="button">Iniciar Sesion</a>
                </div>
            </div>

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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fa-solid fa-xmark"></i></button>
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

    