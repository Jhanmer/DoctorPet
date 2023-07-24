
<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>

<?php
require 'Config/conexion_bd.php';
$idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
$con = fnConnect($msg);
$sql = "select m.idMascota, m.NomMasc, m.EdadMasc, e.nombreEspe, r.nombreRaza, m.SexoMasc, m.idCliente, m.peso, m.imgMascota
FROM DP_Mascota m
JOIN DP_Especie e ON m.idEspecie = e.idEspecie
JOIN DP_Raza r ON m.idRaza = r.idRaza where m.idCliente = '$idCliente'";
$listaVet= mysqli_query($con, $sql);
$numeracion=0; //contador de registros
?>

<div class="cuerpo-tabla">
    <main class="table">
        <h1 style="margin: inherit; padding: 25px; background-color: #f9f9f9; text-align: center; text-shadow: 1px 1px 2px #3f09ff;">
            <span style="text-decoration: none; font-weight: bold;">Lista de Mascotas</span>
        </h1>
        <section class="table__header">
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
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Edad <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Especie <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Raza <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Sexo <span class="icon-arrow">&UpArrow;</span></th>
                        <th hidden> Cliente <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Peso <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Imagen Mascota <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $busc= mysqli_query($con, $sql);
                    if($busc -> num_rows >0){
                        while($row= mysqli_fetch_array($busc)){                                                  
                ?>    
                    <tr>
                        <td><?php echo $row['idMascota']; ?></td>
                        <td><?php echo $row['NomMasc']; ?> </td>
                        <td> <?php echo $row['EdadMasc']; ?> años</td>
                        <td> <?php echo $row['nombreEspe']; ?> </td>
                        <td> <?php echo $row['nombreRaza']; ?> </td>
                        <td> <?php echo $row['SexoMasc']; ?> </td>
                        <td hidden> <?php echo $row['idCliente']; ?> </td>
                        <td> <?php echo $row['peso']; ?> Kg Aproximadamente</td>
                        <td> 
                            <figure>
                                <img width="250px" height="500px" src="data:image/jpg;base64,<?php echo base64_encode($row['imgMascota']); ?>"/>                                      
                            </figure> 
                        </td>
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