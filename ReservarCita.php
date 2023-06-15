<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>

<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select idVeterinario, nombreVet, apellidoVet, direccion, telefono, correo, especialidad, experiencia, fechaContra, disponibilidad from dp_veterinarios;";
$listaVet= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

?>

<style>
  .css-button-3d--blue {
    min-width: 130px;
    height: 40px;
    color: #fff;
    padding: 5px 10px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
    outline: none;
    border-radius: 5px;
    border: none;
    background: #3d348b;
    box-shadow: 0 5px #2fff;
    }
    .css-button-3d--blue:hover {
    box-shadow: 0 3px #2c0b8e;
    top: 1px;
    }
    .css-button-3d--blue:active {
    box-shadow: 0 0 #2c0b8e;
    top: 5px;
    }

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

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                <h2 class="title">Lista de Veterinarios Disponibles</h2>
                </div>
                <div class="card-body">
                <div class="container">
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Especialidad</th>
                            <th scope="col">Experiencia</th>
                            <th scope="col">Fecha Contratación</th>
                            <th scope="col">Disponibilidad</th>
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
                                    <td><?php echo $row['nombreVet']; ?></td>
                                    <td><?php echo $row['apellidoVet']; ?></td>
                                    <td><?php echo $row['direccion']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['correo']; ?></td>
                                    <td><?php echo $row['especialidad']; ?></td>
                                    <td><?php echo $row['experiencia']; ?></td>
                                    <td><?php echo $row['fechaContra']; ?></td>
                                    <td><?php echo $row['disponibilidad']; ?></td>
                                    <td><a href="#!" class="css-button-3d--blue" onclick="openModal()">Seleccionar</a></td>
                                </tr>
                                <?php
                            }
                            }

                        ?>
                        <!--
                        <tr>
                            <th scope="row">The Lion King (2019 remake)</th>
                            <td data-title="Released">2019</td>
                            <td data-title="Studio">Disney</td>
                            <td data-title="Worldwide Gross" data-type="currency">$1,657,870,986</td>
                            <td data-title="Domestic Gross" data-type="currency">$543,638,043</td>
                            <td data-title="International Gross" data-type="currency">$1,114,232,943</td>
                            <td data-title="Budget" data-type="currency">$260,000,000</td>
                            <td><button class="btn" onclick="openModal()">Botón</button></td>
                        </tr>    -->                    
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <div class="card-body">
                    <form action="/Controlador/RegistrarConsulta.php" method="post">
                        <div class="form-row m-b-55">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-7">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" name="txtNom" type="text" required="">
                                            <label class="label--desc">Tus nombres</label>
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
                                            <input class="input--style-5" type="text" name="txtTelefono" pattern="[0-9]+" maxlength="9">
                                            <label class="label--desc">Número de telefono</label>
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
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="txtCorreo">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="txtCorreo">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="txtCorreo">
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