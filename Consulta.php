<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>
<div class="tema-producto">
    <h2>Reserva tu Cita</h2>
</div>
<section>
        <form class="formulario" action="/Controlador/RegistrarConsulta.php" method="post">
            <fieldset>
                    <!-- <legend>Contáctanos llenando todos los campos</legend> -->
                    <div class="contenedor-campos">
                        <div class="campo">
                            <label for="">Nombre</label>
                            <input name="txtNom" class="input-text" type="text" placeholder="Tu Nombre" required="">
                        </div>
                        <div class="campo">
                            <label for="">Teléfono</label>
                            <input name="txtTelefono"class="input-text" type="tel"  pattern="[0-9]+" maxlength="9" placeholder="Teléfono" required="">
                        </div>
                        <div class="campo">
                            <label for="">Fecha</label>
                            <input name="txtFecha" class="input-text" type="date" required="">
                        </div>
                        <div class="campo">
                            <label for="">Correo</label>
                            <input name="txtCorreo" class="input-text" type="email" placeholder="email" required="" >
                        </div>
                        <div class="campo">
                            <label for="">Motivo</label>
                            <textarea name="txtMotivo" class="input-text" required="" placeholder="Cuéntanos tu asunto..."></textarea>
                        </div>
                    </div><!-- contenedor campos -->
                    <div class="alinear-derecha flex">
                        <input class="boton w-sm-100" type="submit" value="Enviar">
                    </div>
            </fieldset>
        </form>
</section>
<?php 
    include './includes/templates/footer.php';

?>