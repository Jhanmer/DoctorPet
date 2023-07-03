<?php
require '../Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select c.idConsulta, c.nombreCli, c.TelefonoCons,c.FechaCons,c.correoCli,
   c.Motivo from DP_Consulta c;";
$lista = mysqli_query($con, $sql);
$numeracion = 0; //contador de registros

$error = null;
$mensaje = null;
if (isset($_POST["enviar"])) {
    //capturando datos
    $reg["idConsulta"] = $_POST["idConsulta"];
    $reg["nombreCli"] = $_POST["nombreCli"];
    $reg["TelefonoCons"] = $_POST["TelefonoCons"];
    $reg["FechaCons"] = $_POST["FechaCons"];
    $reg["correoCli"] = $_POST["correoCli"];
    $reg["Motivo"] = $_POST["Motivo"];
    InsertarCliente($reg, $mensaje, $error);
}
function InsertarCliente($reg, &$mensaje, &$error)
{
    $con = fnConnect($msg);
    mysqli_query($con, "start transaction");
    $sqlinsert = "insert into DP_Cliente(idConsulta, nombreCli, TelefonoCons, FechaCons,
    correoCli, Motivo) values ('{$reg["idConsulta"]}',"
        . "             '{$reg["nombreCli"]}','{$reg["TelefonoCons"]}','{$reg["FechaCons"]}',"
        . "             '{$reg["correoCli"]}','{$reg["Motivo"]}';";
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
                    <input class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar Consulta"><br>
                 </div>



                <!-- Hoverable rows start -->
                <section class="section">
                    <div class="row" id="table-hover-row">
                        <div class="col-14">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">TABLA DE CONSULTAS</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table hover -->
                                    <div class="table-responsive">

                                        

                                        <table class="table table-hover mb-0 table_id" id="tblProductos">
                                            <thead>
                                                <tr>
                                                    <th class="colorCabecera">ID</th>
                                                    <th class="colorCabecera">CLIENTE</th>
                                                    <th class="colorCabecera">TELEFONO</th>
                                                    <th class="colorCabecera">FECHA</th>
                                                    <th class="colorCabecera">CORREO</th>
                                                    <th class="colorCabecera">MOTIVO</th>
                                                    <th>Estado de Atención</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $busc = mysqli_query($con, $sql);

                                                if ($busc->num_rows > 0) {
                                                    while ($row = mysqli_fetch_array($busc)) {


                                                ?>
                                                        <tr>
                                                            <td><?php echo $row['idConsulta']; ?></td>
                                                            <td><?php echo $row['nombreCli']; ?></td>
                                                            <td><?php echo $row['TelefonoCons']; ?></td>
                                                            <td><?php echo $row['FechaCons']; ?></td>
                                                            <td><?php echo $row['correoCli']; ?></td>
                                                            <td><?php echo $row['Motivo']; ?></td>
                                                            <td>
                                                                <select name="opciones" class="btn btn-primary btn-sm dropdown-toggle">
                                                                    <?php
                                                                    // Definir manualmente las opciones del select
                                                                    $estados_pago = array(
                                                                        array('id' => 0, 'texto' => 'Pendiente'),
                                                                        array('id' => 1, 'texto' => 'En curso'),
                                                                        array('id' => 2, 'texto' => 'Atendido')
                                                                    );

                                                                    // Generar las opciones del select
                                                                    foreach ($estados_pago as $estado) {
                                                                        $selected = ($row['EstadoPagoTexto'] == $estado['texto']) ? 'selected' : '';
                                                                        echo '<option value="' . $estado['id'] . '" ' . $selected . '>' . $estado['texto'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-outline-warning">Actualizar</a>
                                                            </td>
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