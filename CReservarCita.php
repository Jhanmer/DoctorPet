
<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>

<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select dp_Vet.idVeterinario, dp_Vet.nombreVet, dp_Vet.apellidoVet,dp_Vet.telefono,dp_Vet.correo,dp_Vet.especialidad, dp_Vet.experiencia, dp_VetHorario.diaSemana, dp_VetHorario.horaInicio, dp_VetHorario.horaFin
FROM dp_veterinarios dp_Vet
INNER JOIN dp_VetHorario ON dp_Vet.idHorario = dp_VetHorario.idHorario;";
$listaVet= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

?>

<?php
$con = fnConnect($msg);
$idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
$consultaMascCliente = "select * from dp_mascota where idCliente  = '$idCliente'";
$ListaMascCli = mysqli_query($con, $consultaMascCliente);
?>

<style>

  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 1000px;
    bottom: 50px;
  }

  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
</style>

<div class="cuerpo-tabla">


    <main class="table">
        <section class="table__header">
            <h1>Lista de Veterinarios</h1>
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
                        <th> Apellidos <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Telefono <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Correo <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Especialidad <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Experiencia <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Dia de Semana <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hora de Inicio <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hora de Fin <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $busc= mysqli_query($con, $sql);
                    if($busc -> num_rows >0){
                        while($row= mysqli_fetch_array($busc)){                                                  
                ?>    
                    <tr>
                        <td><?php echo $row['idVeterinario']; ?></td>
                        <td><?php echo $row['nombreVet']; ?> </td>
                        <td> <?php echo $row['apellidoVet']; ?> </td>
                        <td> <?php echo $row['telefono']; ?> </td>
                        <td> <?php echo $row['correo']; ?> </td>
                        <td> <?php echo $row['especialidad']; ?> </td>
                        <td> <?php echo $row['experiencia']; ?> años</td>
                        <td>
                            <p class="status delivered"><?php echo $row['diaSemana']; ?></p>
                        </td>
                        <td>
                            <p class="status cancelled"><?php echo $row['horaInicio']; ?></p>
                        </td>
                        <td>
                            <p class="status pending"><?php echo $row['horaFin']; ?></p>
                        </td>
                        <td>
                            <a href="#" class="status shipped"  onclick="openModal()"> Seleccionar </a>
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
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <div class="card-body">
        <form action="/Controlador/RegistrarConsulta.php" method="post">
                        <div class="form-row m-b-55">
                            <div class="name">Motivo</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-7">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" name="txtNom" type="text" required="">
                                            <label class="label--desc">Describa un motivo breve para la consulta*</label>
                                        </div>
                                    </div>                                  
                                </div>
                            </div>                           
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Telefono</div>
                            <div class="value">
                                <div class="row row-refine">                           
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" onkeypress="return soloNumeros(event)" type="text" name="txtTelefono" pattern="[0-9]+" maxlength="9"  style="width: 130px;">
                                            <label  class="label--desc">Número de telefono</label>
                                            <script>
                                                function soloNumeros(event) {
                                                    var charCode = event.which ? event.which : event.keyCode;
                                                    if (charCode < 48 || charCode > 57) {
                                                        event.preventDefault();
                                                        return false;
                                                    }
                                                    return true;
                                                    }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Fecha Atención</div>
                            <div class="value">
                                <div class="input-group">
                                <div class="row row-refine">                           
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="txtFecha">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>  
                        <div class="form-row">
                            <div class="name">Seleccione su mascota</div>                          
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="mascotaCli" requerid>
                                                <option disabled="disabled" selected="selected">Seleccione</option>
                                                <?php while ($row = mysqli_fetch_assoc($ListaMascCli)) { ?>
												<option value="<?php echo $row["idMascota"] ?>">
													<?php echo $row["NomMasc"] ?>
												</option>
											    <?php } ?>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Horario</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="subject">
                                                <option disabled="disabled" selected="selected">Seleccione Horario</option>
                                                <option>Subject 1</option>
                                                <option>Subject 2</option>
                                                <option>Subject 3</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!--
                        <div class="form-row">
                            <div class="name">Subject</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="subject">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>Subject 1</option>
                                                <option>Subject 2</option>
                                                <option>Subject 3</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                         -->
                        
                        <div class="form-row">
                            <div class="name">Motivo de Cita</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <textarea name="txtMotivo" class="input-text" required="" placeholder="Cuéntanos tu asunto..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Enviar Consulta</button>
                        </div>
    </form>
    </div>
  </div>
</div>
<script>
  function openModal() {
    document.getElementById("myModal").style.display = "block";
  }

  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
</script>

<?php 
include './includes/templates/footer.php';
?>