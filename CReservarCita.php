
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

<?php
$con = fnConnect($msg);
$consultaHora = "select * FROM `dp_hora` where estado = '1'";
$ListaHora = mysqli_query($con, $consultaHora);
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


<style media="screen">
*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #0855ae;
}
.popup{
    background-color: #ffffff;
    width: 420px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none; 
    text-align: center;
}
.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
		background: #4d0f77;
		border-radius: 100%;
		width: 40px;
		height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup h2{
	margin-top: -20px;
}
.popup p{
    font-size: 14px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
}
.buton{
    display: block;
    width: 150px;
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #0f72e5;
    border-radius: 20px;
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
}
.modala{
    display: block;
    width: 150px;
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #0f72e5;
		border-radius: 20px;
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
}
    </style>
<!--Script-->


<div class="cuerpo-tabla">
    <main class="table">
        <h1 style="margin: inherit; padding: 25px; background-color: #f9f9f9; text-align: center; text-shadow: 1px 1px 2px #3f09ff;">
            <span style="text-decoration: none; font-weight: bold;">Disponibilidad de Veterinarios</span>
        </h1>
        <div class="popup">
                <button id="close">&times;</button>
                <h2>¿Ya registrastes a tu Mascota?</h2>
                <p>
                    Puedes registrar su mascota Aquí!!.
                    
                </p>
                <a class="buton" href="mascota.php">Registrar Mascota</a>
        </div>    
        <section class="table__header">
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
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellidos <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Telefono <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Correo <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Especialidad <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Experiencia <span class="icon-arrow">&UpArrow;</span></th>
                        <th hidden> Dia de Semana <span class="icon-arrow">&UpArrow;</span></th>
                        <th > Hora de Inicio <span class="icon-arrow">&UpArrow;</span></th>
                        <th > Hora de Fin <span class="icon-arrow">&UpArrow;</span></th>
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
                        <td class="status nombre"><?php echo $row['nombreVet']; ?> </td>
                        <td class="status ape"> <?php echo $row['apellidoVet']; ?> </td>
                        <td> <?php echo $row['telefono']; ?> </td>
                        <td> <?php echo $row['correo']; ?> </td>
                        <td class="status especialidad"> <?php echo $row['especialidad']; ?> </td>
                        <td> <?php echo $row['experiencia']; ?> años</td>
                        <td hidden>
                            <p class="status delivered"><?php echo $row['diaSemana']; ?></p>
                        </td>
                        <td >
                            <p class="status cancelled"><?php echo $row['horaInicio']; ?></p>
                        </td >
                        <td >
                            <p class="status pending"><?php echo $row['horaFin']; ?></p>
                        </td>
                        <td>
                            <a href="#" class="status shipped"  onclick="openModal()" data-id="<?php echo $row['idVeterinario']; ?>"> Seleccionar </a>
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
        <form action="/Controlador/RegistrarReserva.php" method="post">
            <?php
            $idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
            ?>
                <div hidden  class="form-row">
                    <div class="name">Veterinario</div>
                        <div class="">
                            <input hidden type="text" id="idVeterinario" name="idVeterinario">
                            <input type="hidden" name="idCliente" value="<?php echo $idCliente; ?>">

                        </div>
                </div> 
                <div class="form-row">
                    <div class="name">Especialidad</div>
                        <div class="">
                            <p class="status especialidad" id="especialidad" name="especialidad" ></p>
                        </div>
                </div>
                <div class="form-row">
                    <div class="name">Nombre</div>
                        <div class="">
                            <p class="status nombre" id="nombreVet" name="nombreVet" ></p>
                        </div>
                </div>
                <div class="form-row">
                    <div class="name">Apellido</div>
                        <div class="">
                            <p class="status ape" id="apellidoVet" name="apellidoVet" ></p>
                        </div>
                </div>   
                <div class="form-row">
                    <div class="name">Hora de Inicio Atención</div>
                        <div class="">
                            <p class="status cancelled" id="horaInicio"></p>
                        </div>
                </div>
                <div class="form-row">
                    <div class="name">Hora de Fin Atención</div>
                        <div class="">
                            <p class="status pending" id="horaFin"></p>
                        </div>
                </div>
                            <div class="form-row m-b-55">
                            <div class="name">Motivo</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-7">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" name="txtMotivo" type="text" required="">
                                            <label class="label--desc">Describa un motivo breve para la consulta*</label>
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
                                            <input class="input--style-5" type="date" name="txtFecha" required="" min="<?php echo date('Y-m-d'); ?>">
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
                                            <select name="mascotaCli" required="">
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
                            <div class="name">Hora</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="txtHora" required="">
                                                <option disabled="disabled" selected="selected">Seleccione una Hora</option>
                                                <?php while ($row = mysqli_fetch_assoc($ListaHora)) { ?>
												<option value="<?php echo $row["idHora"] ?>">
													<?php echo $row["hora"] ?>
												</option>
											    <?php } ?>
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
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Enviar Consulta</button>
                        </div>
    </form>
    </div>
  </div>
</div>
<script>
function actualizarFechaHora() {
  var fechaHoraActual = new Date();
  var fecha = fechaHoraActual.toLocaleDateString();
  var hora = fechaHoraActual.toLocaleTimeString();

  var fechaHoraElemento = document.getElementById("fecha-hora");
  fechaHoraElemento.innerHTML = "Fecha y hora actual: " + fecha + " " + hora;
}

actualizarFechaHora();


function openModal() {

    var btn = event.target;
    var idVeterinario = btn.getAttribute("data-id");

    document.getElementById("idVeterinario").value = idVeterinario;
    var horaInicio = btn.parentNode.parentNode.querySelector('.status.cancelled').textContent;
    var horaFin = btn.parentNode.parentNode.querySelector('.status.pending').textContent;

    var especialidad = btn.parentNode.parentNode.querySelector('.status.especialidad').textContent;
    var nombreVet = btn.parentNode.parentNode.querySelector('.status.nombre').textContent;
    var apellidoVet = btn.parentNode.parentNode.querySelector('.status.ape').textContent;
    
    document.getElementById("horaInicio").textContent = horaInicio;
    document.getElementById("horaFin").textContent = horaFin;
    document.getElementById("especialidad").textContent = especialidad;
    document.getElementById("nombreVet").textContent = nombreVet;
    document.getElementById("apellidoVet").textContent = apellidoVet;
    document.getElementById("myModal").style.display = "block";
}



function closeModal() {
    document.getElementById("myModal").style.display = "none";
}
</script>

<script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        100 
    )
});

document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
</script>

<?php 
include './includes/templates/footer.php';
?>