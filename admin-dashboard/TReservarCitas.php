<?php
require '../Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select cp.idConsultaPer,mas.NomMasc,vet.nombreVet, vet.apellidoVet, 
vet.especialidad,cp.motivo, cp.fechaAtencion,
cp.monto, 
Case cp.estadoPago WHEN 0 THEN 'Pago Pendiente' WHEN 1 THEN 'Pago Sin Validar' WHEN 2 THEN 'Pago Realizado' END AS EstadoPagoTexto, 
Case cp.estadoAtencion WHEN 0 THEN 'Pendiente' WHEN 1 THEN 'En curso' WHEN 2 THEN 'Atendido' END AS EstadoAtencionTexto, 
hor.hora from dp_consultapersonalizada cp inner join dp_veterinarios vet on cp.idConsultaPer=vet.idVeterinario 
inner join dp_mascota mas on mas.idMascota=cp.idConsultaPer 
inner join dp_hora hor on cp.idConsultaPer=hor.idHora;";
$lista= mysqli_query($con, $sql);

$sqlEvidencia = "select idConsultaPer, pago.cartera, pago.dni, pago.evidenciaPago from dp_pagoconsultapersonalizada pago;";
$lista= mysqli_query($con, $sqlEvidencia);

include ('barra-lateral.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Contenido -->
    <div id="app">
        <div id="main">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Listas de Reservar</h3>
                            <p class="text-subtitle text-muted">Vizualición de todas las reservas realizadas.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Pagina Princpal</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tabla de Reservas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Tabla de datos
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th class="colorCabecera">ID</th>
                                        <th class="colorCabecera">Mascota</th>
                                        <th class="colorCabecera">Nombre Vet</th>
                                        <th class="colorCabecera">Apellidos Vet</th>
                                        <th class="colorCabecera">Especialidad</th>
                                        <th class="colorCabecera">Motivo</th> 
                                        <th class="colorCabecera">Fecha Atención</th>
                                        <th hidden class="colorCabecera">Evidencia</th>
                                        <th class="colorCabecera">Monto a Pagar</th>
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
                                            <td  id="fila-<?php echo $row['idConsultaPer'];?>" ><?php echo $row['idConsultaPer']; ?></td>
                                            <td><?php echo $row['NomMasc']; ?> </td>
                                            <td><?php echo $row['nombreVet']; ?> </td>
                                            <td> <?php echo $row['apellidoVet']; ?> años</td>
                                            <td> <?php echo $row['especialidad']; ?></td>
                                            <td> <?php echo $row['motivo']; ?> </td>
                                            <td> <?php echo $row['fechaAtencion']; ?> </td>
                                            <!--
                                                 <td>
                                                <figure>
                                                    <img width="100px" height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['evidenciaPago']); ?>"/>                                      
                                                </figure> 
                                                
                                            </td>    
                                            -->
                                                                   
                                            <td> S/. <?php echo $row['monto']; ?> </td>
                                            <td>
                                                <div class="dropdown">
                                                <select name="opciones" class="btn btn-primary btn-sm dropdown-toggle" onchange="actualizarEstado(<?php echo $row['idConsultaPer']; ?>, this.value)">
                                                        <?php
                                                        // Definir manualmente las opciones del select
                                                        $estados_pago = array(
                                                            array('id' => 0, 'texto' => 'Pago Pendiente'),
                                                            array('id' => 1, 'texto' => 'Pago Sin Validar'),
                                                            array('id' => 2, 'texto' => 'Pago Realizado')
                                                        );

                                                        // Generar las opciones del select
                                                        foreach ($estados_pago as $estadoPago) {
                                                            $selected = ($row['EstadoPagoTexto'] == $estadoPago['texto']) ? 'selected' : '';
                                                            echo '<option value="' . $estadoPago['id'] . '" ' . $selected . '>' . $estadoPago['texto'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div> 
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <select name="opciones" class="btn btn-primary btn-sm dropdown-toggle" onchange="actualizarEstadoAtencion(<?php echo $row['idConsultaPer']; ?>, this.value)">
                                                        <?php
                                                        // Definir manualmente las opciones del select
                                                        $estados_atencion = array(
                                                            array('id' => 0, 'texto' => 'Pendiente'),
                                                            array('id' => 1, 'texto' => 'En curso'),
                                                            array('id' => 2, 'texto' => 'Atendido')
                                                        );

                                                        // Generar las opciones del select
                                                        foreach ($estados_atencion as $estadoAte) {
                                                            $selected = ($row['EstadoAtencionTexto'] == $estadoAte['texto']) ? 'selected' : '';
                                                            echo '<option value="' . $estadoAte['id'] . '" ' . $selected . '>' . $estadoAte['texto'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>                                      
                                            </td>
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

                </section>
            </div>

            <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Tabla de Evidencias
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>ID Reserva</th>
                                        <th>Cartera</th>
                                        <th>DNI</th>
                                        <th>Evidencia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        $busc= mysqli_query($con, $sqlEvidencia);

                                        if($busc -> num_rows >0){
                                            while($row= mysqli_fetch_array($busc)){                                       
                                        ?> 
                                        <tr>
                                            <td  id="fila-<?php echo $row['idConsultaPer'];?>" ><?php echo $row['idConsultaPer']; ?></td> 
                                            <td><?php echo $row['cartera']; ?></td>  
                                            <td><?php echo $row['dni']; ?></td>  
                                            <td>
                                                <figure>
                                                    <img width="250px" height="500px" src="data:image/jpg;base64,<?php echo base64_encode($row['evidenciaPago']); ?>"/>                                      
                                                </figure> 
                                                
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

                </section>                        

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

<script>
    function actualizarEstado(idConsultaPer, estadoSeleccionado) {
    $.ajax({
        
        url: '/Controlador/ActualizarPago.php', // ruta del archivo PHP que procesará la actualización
        method: 'POST',
        data: {
            idConsultaPer: idConsultaPer,
            estadoSeleccionado: estadoSeleccionado
        },
        success: function(response) {
            // La actualización se realizó correctamente
            // Puedes realizar alguna acción adicional, como actualizar la interfaz de usuario
            console.log('Actualización exitosa');
        },
        error: function(xhr, status, error) {
            // Ocurrió un error durante la actualización
            console.error(error);
        }
    });
    }
    function actualizarEstadoAtencion(idConsultaPer, estadoSeleccionado) {
    $.ajax({
        
        url: '/Controlador/ActualizarAtencion.php', // ruta del archivo PHP que procesará la actualización
        method: 'POST',
        data: {
            idConsultaPer: idConsultaPer,
            estadoSeleccionado: estadoSeleccionado
        },
        success: function(response) {
            // La actualización se realizó correctamente
            // Puedes realizar alguna acción adicional, como actualizar la interfaz de usuario
            console.log('Actualización exitosa');
        },
        error: function(xhr, status, error) {
            // Ocurrió un error durante la actualización
            console.error(error);
        }
    });
    }

</script>

<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
 <script src="assets/js/main.js"></script>

    