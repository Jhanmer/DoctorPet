<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>

<style>
  .btn {
    padding: 6px 10px;
    background-color: #4CAF50;
    border: none;
    color: white;
    cursor: pointer;
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
                            <th scope="col">Film Title</th>
                            <th scope="col">Released</th>
                            <th scope="col">Studio</th>
                            <th scope="col">Worldwide Gross</th>
                            <th scope="col">Domestic Gross</th>
                            <th scope="col">International Gross</th>
                            <th scope="col">Budget</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">The Lion King (2019 remake)</th>
                            <td data-title="Released">2019</td>
                            <td data-title="Studio">Disney</td>
                            <td data-title="Worldwide Gross" data-type="currency">$1,657,870,986</td>
                            <td data-title="Domestic Gross" data-type="currency">$543,638,043</td>
                            <td data-title="International Gross" data-type="currency">$1,114,232,943</td>
                            <td data-title="Budget" data-type="currency">$260,000,000</td>
                            <td><button class="btn" onclick="openModal()">Botón</button></td>
                        </tr>                        
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