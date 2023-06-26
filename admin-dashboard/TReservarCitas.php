<?php
require '../Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select cp.idConsultaPer,mas.NomMasc,vet.nombreVet, vet.apellidoVet, vet.especialidad,cp.motivo, cp.fechaAtencion,cp.monto, Case cp.estadoPago WHEN 0 THEN 'Pendiente de Validar' WHEN 1 THEN 'Pago pendiente' WHEN 2 THEN 'Pago atrasado' END AS EstadoPagoTexto, Case cp.estadoAtencion WHEN 0 THEN 'Pendiente' WHEN 1 THEN 'En curso' WHEN 2 THEN 'Atendido' END AS EstadoAtencionTexto, hor.hora from dp_consultapersonalizada cp inner join dp_veterinarios vet on cp.idConsultaPer=vet.idVeterinario inner join dp_mascota mas on mas.idMascota=cp.idConsultaPer inner join dp_hora hor on cp.idConsultaPer=hor.idHora;";
$lista= mysqli_query($con, $sql);

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
                     <input class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar Reserva"><br>
                </div>

                

                <!-- Hoverable rows start -->
                <section class="section">
                    <div class="row" id="table-hover-row">
                        <div class="col-14">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Listas de Reservar</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table hover -->
                                    <div class="table-responsive">

                                    

                                        <table class="table table-hover mb-0 table_id" id="tblProductos">
                                            <thead>
                                            <tr>
                                                <th class="colorCabecera">ID</th>
                                                <th class="colorCabecera">Mascota</th>
                                                <th class="colorCabecera">Nombre Vet</th>
                                                <th class="colorCabecera">Apellidos Vet</th>
                                                <th class="colorCabecera">Especialidad</th>
                                                <th class="colorCabecera">Motivo</th> 
                                                <th class="colorCabecera">Fecha Atención</th>
                                                <th class="colorCabecera">Monto a Pagar</th>
                                                <th hidden class="colorCabecera">IMAGEN</th>
                                                <th class="colorCabecera">Estado Pago</th>
                                                <th class="colorCabecera">Estado Atención</th>
                                                <th class="colorCabecera">Hora</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
        
                                                $busc= mysqli_query($con, $sql);

                                                if($busc -> num_rows >0){
                                                    while($row= mysqli_fetch_array($busc)){
                                                
                                                
                                                ?> 
                                                <tr>
                                                    <td><?php echo $row['idConsultaPer']; ?></td>
                                                    <td><?php echo $row['NomMasc']; ?> </td>
                                                    <td><?php echo $row['nombreVet']; ?> </td>
                                                    <td> <?php echo $row['apellidoVet']; ?> años</td>
                                                    <td> <?php echo $row['especialidad']; ?></td>
                                                    <td> <?php echo $row['motivo']; ?> </td>
                                                    <td> <?php echo $row['fechaAtencion']; ?> </td>                                                   
                                                    <td> S/. <?php echo $row['monto']; ?> </td>
                                                    <td>
                                                        <?php echo $row['EstadoPagoTexto']; ?>
                                                    </td>
                                                    <td><?php echo $row['EstadoAtencionTexto']; ?></td>
                                                    <td> <?php echo $row['hora']; ?> </td>
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