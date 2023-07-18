
<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>

<?php
require 'Config/conexion_bd.php';
$idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
$con = fnConnect($msg);
$sql = "select cp.idConsultaPer,mas.NomMasc,vet.nombreVet, vet.apellidoVet, vet.especialidad,cp.motivo, 
cp.fechaAtencion,cp.estadoPago,cp.monto, 
Case cp.estadoPago WHEN 0 THEN 'Pago pendiente' WHEN 1 THEN 'Pendiente de Validar' WHEN 2 THEN 'Pago Realizado' END AS EstadoPagoTexto, 
Case cp.estadoAtencion WHEN 0 THEN 'Pendiente' WHEN 1 THEN 'En curso' WHEN 2 THEN 'Atendido' END AS EstadoAtencionTexto, 
hor.hora 
from dp_consultapersonalizada cp inner join dp_veterinarios vet on vet.idVeterinario=cp.idVeterinario 
inner join dp_mascota mas on mas.idMascota=cp.idMascota 
inner join dp_hora hor on hor.idHora=cp.idHora where cp.idCliente = '$idCliente';";
$listaVet= mysqli_query($con, $sql);
$numeracion=0; //contador de registros
?>
<div class="cuerpo-tabla">
    <main class="table">
        <section class="table__header">
            <h1>Mis Reservas</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th hidden> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Nombre Mascota<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre Veterinario <span class="icon-arrow">&UpArrow;</span></th>
                        <th hidden> Apellido Veterinario <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Especialidad<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Razón Principal <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha Registrada <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hora de Atencion <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Monto<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Estado de Pago<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Estado de Atención<span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $busc= mysqli_query($con, $sql);
                    if($busc -> num_rows >0){
                        while($row= mysqli_fetch_array($busc)){                                                  
                ?>    
                    <tr>
                        <td hidden><?php echo $row['idConsultaPer']; ?></td>
                        <td ><?php echo $row['NomMasc']; ?> </td>
                        <td><?php echo $row['nombreVet']; ?> </td>
                        <td hidden> <?php echo $row['apellidoVet']; ?> años</td>
                        <td> <?php echo $row['especialidad']; ?></td>
                        <td> <?php echo $row['motivo']; ?> </td>
                        <td> <?php echo $row['fechaAtencion']; ?> </td>
                        <td class="status cancelled"> <?php echo $row['hora']; ?> </td>
                        <td> S/. <?php echo $row['monto']; ?> </td>
                        <td <?php if($row['estadoPago'] == 0) { echo 'class="status pendingPago"'; } elseif ($row['estadoPago'] == 1) { echo 'class="status pendingPagoValid"'; } else {echo 'class="status Pago"';}  ?>>
                            <?php 
                            if($row['estadoPago'] == 0){
                                echo '<a href="pago.php?idConsultaPer=' . $row['idConsultaPer'] . '">' . $row['EstadoPagoTexto'] . '</a>';    
                            }else if($row['estadoPago'] == 1){
                                echo $row['EstadoPagoTexto'];     
                            }else{
                                echo $row['EstadoPagoTexto'];
                            }
                            ?>                           
                        </td>
                        <td class="status pending"><?php echo $row['EstadoAtencionTexto']; ?></td>
                    </tr>
                    <?php
                        }
                    }

                    ?>
                </tbody>
            </table>
        </section>
    </main>
</div>

<?php 
include './includes/templates/footer.php';
?>