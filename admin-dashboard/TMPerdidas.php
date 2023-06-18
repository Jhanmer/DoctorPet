<?php
require '../Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select m.Id_perdidos, m.nombre_perdido, m.fecha_perdido, m.visto_perdido,m.contacto_perdido,
   m.tamanio_perdido, m.descripcion_perdido from DP_mascota_perdida m;";
$lista = mysqli_query($con, $sql);
$numeracion = 0; //contador de registros

$error = null;
$mensaje = null;
if (isset($_POST["enviar"])) {
    //capturando datos
    $reg["Id_perdidos"] = $_POST["Id_perdidos"];
    $reg["nombre_perdido"] = $_POST["nombre_perdido"];
    $reg["fecha_perdido"] = $_POST["fecha_perdido"];
    $reg["visto_perdido"] = $_POST["visto_perdido"];
    $reg["contacto_perdido"] = $_POST["contacto_perdido"];
    $reg["tamanio_perdido"] = $_POST["tamanio_perdido"];
    $reg["descripcion_perdido"] = $_POST["descripcion_perdido"];
    InsertarCliente($reg, $mensaje, $error);
}
function InsertarCliente($reg, &$mensaje, &$error)
{
    $con = fnConnect($msg);
    mysqli_query($con, "start transaction");
    $sqlinsert = "insert into DP_mascota_perdida(Id_perdidos, nombre_perdido, fecha_perdido, visto_perdido,contacto_perdido,
        tamanio_perdido, descripcion_perdido) values ('{$reg["Id_perdidos"]}',"
        . "             '{$reg["nombre_perdido"]}','{$reg["fecha_perdido"]}','{$reg["visto_perdido"]}',"
        . "             '{$reg["contacto_perdido"]}','{$reg["tamanio_perdido"]}','{$reg["descripcion_perdido"]}';";
    //ejecutamos la consulta
    $respuesta = mysqli_query($con, $sqlinsert);
    if (!$respuesta) {
        mysqli_query($con, "rollback");
        $error = "<p>Datos ingresados no son correctos...</p>";
        $error .= "<p>SQL: $sqlinsert </p>";
        return;
    }
    //hacemos permanente los cambios
    mysqli_query($con, "commit");
    $mensaje = "<p>Cliente registrado correctamente..</p>";
}
include ('barra-lateral.php');
?>
        <!-- Contenido -->
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
                            <h3>Tablas de Datos</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>



                <div class="container-fluid">
                    <input class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar Mascota Perdida"><br>
                </div>



                <!-- Hoverable rows start -->
                <section class="section">
                    <div class="row" id="table-hover-row">
                        <div class="col-14">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">TABLA DE MASCOTAS PERDIDAS</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table hover -->
                                    <div class="table-responsive">

                                       

                                        <table class="table table-hover mb-0 table_id" id="tblProductos">
                                            <thead>
                                                <tr>
                                                    <th class="colorCabecera">ID</th>
                                                    <th class="colorCabecera">NOMBRE</th>
                                                    <th class="colorCabecera">FECHA DE PERDIDA</th>
                                                    <th class="colorCabecera">VISTO ULT. VEZ</th>
                                                    <th class="colorCabecera">CONTACTO</th>
                                                    <th class="colorCabecera">TAMAÑO</th>
                                                    <th class="colorCabecera">DESCRIPCION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $busc = mysqli_query($con, $sql);

                                                if ($busc->num_rows > 0) {
                                                    while ($row = mysqli_fetch_array($busc)) {


                                                ?>
                                                        <tr>
                                                            <td><?php echo $row['Id_perdidos']; ?></td>
                                                            <td><?php echo $row['nombre_perdido']; ?></td>
                                                            <td><?php echo $row['fecha_perdido']; ?></td>
                                                            <td><?php echo $row['visto_perdido']; ?></td>
                                                            <td><?php echo $row['contacto_perdido']; ?></td>
                                                            <td><?php echo $row['tamanio_perdido']; ?></td>
                                                            <td><?php echo $row['descripcion_perdido']; ?></td>
                                                        </tr>
                                                <?php
                                                    }
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hoverable rows end -->


            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">

                    <div class="float-end">
                        <div class="float-start">
                            <p>2023 &copy; DoctorPet</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>
<script src="../js/buscador.js" type="text/javascript"></script>

</html>