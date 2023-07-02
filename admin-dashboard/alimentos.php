<?php
include('delete-alimento.php');
//recibiendo los datos del registro
$db = fnConnect($con);

$querydata = "SELECT * FROM alimento";

$resultadoData = mysqli_query($db, $querydata);


//traer el mensaje de registro exitosamente
$mensaje = $_GET['mensaje'] ?? null;
$update = $_GET['update'] ?? null;


?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tabla De Productos</h3>
                    <?php if ($mensaje) {
                        echo $mensaje;
                    } ?>
                    <?php if ($update) {
                        echo $update;
                    } ?>
                   
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped propiedades" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Imagen</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($propiedad = mysqli_fetch_assoc($resultadoData)) : ?>
                                <tr>
                                    <td><?php echo $propiedad['idAlimento']; ?></td>
                                    <td><?php echo $propiedad['nombre']; ?></td>
                                    <td><?php echo $propiedad['descripcion']; ?></td>
                                    <td><img src="/imagenes1/<?php echo $propiedad['imagen'] . ".jpg"; ?>" alt="imagen" class="imagen-tabla"></td>
                                    <td><?php echo $propiedad['precio']; ?></td>
                                    <td><?php echo $propiedad['stock']; ?></td>
                                    <td>
                                        <div class="acciones">
                                            <div class="acc-1">
                                                <a href="update-alimento.php?idAlimento=<?php echo $propiedad['idAlimento']; ?>" class="btn btn-primary boton">
                                                    Actualizar</a>
                                            </div>
                                            <br>
                                            <form method="POST" >
                                                <div class="acc-1">
                                                    <input type="hidden" name="idAlimento" class="btn btn-danger boton" value="<?php echo $propiedad['idAlimento'] ?>">
                                                    <input type="submit" class="btn btn-danger boton" value="Eliminar">
                                                </div>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
    <?php
    mysqli_close($db);
    include('footer-lateral.php');
    ?>