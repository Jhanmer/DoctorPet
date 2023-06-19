
<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>

<?php
require 'Config/conexion_bd.php';
$idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
$con = fnConnect($msg);
$sql = "select cp.idConsultaPer,vet.nombreVet, vet.apellidoVet, cp.motivo, cp.fechaAtencion, hor.hora from dp_consultapersonalizada cp inner join dp_veterinarios vet on cp.idConsultaPer=vet.idVeterinario  inner join dp_hora hor on cp.idConsultaPer=hor.idHora where idCliente = '$idCliente'";
$listaVet= mysqli_query($con, $sql);
$numeracion=0; //contador de registros
?>

<div class="cuerpo-tabla">


    <main class="table">
        <section class="table__header">
            <h1>MIS RESERVAS</h1>
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
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre Veterinario <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido Veterinario <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Razón Principal <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha Registrada <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hora de Atencion <span class="icon-arrow">&UpArrow;</span></th>
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
                        <td><?php echo $row['nombreVet']; ?> </td>
                        <td> <?php echo $row['apellidoVet']; ?> años</td>
                        <td> <?php echo $row['motivo']; ?> </td>
                        <td> <?php echo $row['fechaAtencion']; ?> </td>
                        <td class="status cancelled"> <?php echo $row['hora']; ?> </td>
                        <td class="status pending">PENDIENTE</td>
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