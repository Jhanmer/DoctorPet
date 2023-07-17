<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?> 
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Reserva tu Cita</h2>
                </div>
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
                                            <input class="input--style-5" type="date" name="txtFecha" min="<?php echo date('Y-m-d'); ?>">
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
    </div>
<?php 
    include './includes/templates/footer.php';

?>