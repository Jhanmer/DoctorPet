
<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>
<?php

$idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
?>
<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "sELECT * FROM boleta where idCliente = '$idCliente'";
$listaVet= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

?>


<div class="cuerpo-tabla" style="background: #d6e8e1; ">
    <main class="table">
        <h1 style="margin: inherit; padding: 25px; background-color: #8cc63f; text-align: center; text-shadow: 1px 1px 2px #4a8322;">
            <span style="text-decoration: none; font-weight: bold;">Mis compras</span>
        </h1>
        <section class="table__header">
            <h1></h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
            <div class="status hora" id="fecha-hora"></div>

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
                        <th> Monto Total <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre Producto <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha de Compra <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Código Producto <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Evidencia de Pago <span class="icon-arrow">&UpArrow;</span></th>
                        <th >Estado del Producto<span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $busc= mysqli_query($con, $sql);
                    if($busc -> num_rows >0){
                        while($row= mysqli_fetch_array($busc)){                                                  
                ?>    
                    <tr>
                        
                        <td class="status nombre"><?php echo $row['montoTotal']; ?> </td>
                        <td class="status ape"> <?php echo $row['productos']; ?> </td>
                        <td> <?php echo $row['fecha']; ?> </td>
                        <td> <?php echo $row['codigoUnico']; ?> </td>
                        <td>
                            <figure>
                                <img style="border-radius: 0%; width: 130px;height: 300px;" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>                                      
                            </figure> 
                        </td>
                        <td>Sin entregar</td>
                        
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