<?php
require '../Config/conexion_bd.php';
$con = fnConnect($msg);
$sqlVenta = "SELECT idBoleta, idCliente, montoTotal, productos, fecha, codigoUnico, 
imagen,  Case estado When 0 then 'Pendiente' WHEN 1 THEN 'Entregado' WHEN 2 THEN 'Rechazado' end as estadoPedido
FROM boleta ";
$lista= mysqli_query($con, $sqlVenta);

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
                                        <th class="colorCabecera">ID Boleta</th>
                                        <th class="colorCabecera">ID Cliente</th>
                                        <th class="colorCabecera">Monto Total</th>
                                        <th class="colorCabecera">Productos</th>
                                        <th class="colorCabecera">Fecha</th>
                                        <th class="colorCabecera">codigoUnico</th> 
                                        <th class="colorCabecera">Evidencia de Pago</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        $busc= mysqli_query($con, $sqlVenta);

                                        if($busc -> num_rows >0){
                                            while($row= mysqli_fetch_array($busc)){
                                        
                                        
                                        ?> 
                                        <tr>
                                            <td  id="fila-<?php echo $row['idBoleta'];?>" ><?php echo $row['idBoleta']; ?></td>
                                            <td><?php echo $row['idCliente']; ?> </td>
                                            <td><?php echo $row['montoTotal']; ?> </td>
                                            <td> <?php echo $row['productos']; ?></td>
                                            <td> <?php echo $row['fecha']; ?></td>
                                            <td> <?php echo $row['codigoUnico']; ?> </td>
                                            <td >
                                                <img width="210px" height="350px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>   
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <select name="opciones" class="btn btn-primary btn-sm dropdown-toggle" onchange="actualizarPedido(<?php echo $row['idBoleta']; ?>, this.value)">
                                                            <?php
                                                            // Definir manualmente las opciones del select
                                                            $estados_pedido = array(
                                                                array('id' => 0, 'texto' => 'Pendiente'),
                                                                array('id' => 1, 'texto' => 'Entregado'),
                                                                array('id' => 2, 'texto' => 'Rechazado')
                                                            );

                                                            // Generar las opciones del select
                                                            foreach ($estados_pedido as $estadoPedido) {
                                                                $selected = ($row['estadoPedido'] == $estadoPedido['texto']) ? 'selected' : '';
                                                                echo '<option value="' . $estadoPedido['id'] . '" ' . $selected . '>' . $estadoPedido['texto'] . '</option>';
                                                            }
                                                            ?>
                                                    </select>
                                                </div> 
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
            </div>
        </div>    
 </div>  
            

<script>
    function actualizarPedido(idBoleta, estadoPedido) {
    $.ajax({
        
        url: '/Controlador/ActualizarPedido.php', // ruta del archivo PHP que procesará la actualización
        method: 'POST',
        data: {
            idBoleta: idBoleta,
            estadoPedido: estadoPedido
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

    