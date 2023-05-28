<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>
    <!-- Contacto -->
    <section>
        
        <form class="formulario">
            <fieldset>
                <legend>Contactános llenando todos los campos</legend>

                <div class="contenedor-campos">
                    <div class="campo">
                        <label>Nombre</label>
                        <input class="input-text" type="text" placeholder="Tu Nombre">
                    </div>

                    <div class="campo">
                        <label>Teléfono</label>
                        <input class="input-text" type="tel" placeholder="Tu Teléfono">
                    </div>

                    <div class="campo">
                        <label>Correo</label>
                        <input class="input-text" type="email" placeholder="Tu Email">
                    </div>
            
                    <div class="campo">
                        <label>Mensaje</label>
                        <textarea class="input-text" placeholder="Cuéntanos tu mensaje"></textarea>
                    </div>
                </div> <!-- .contenedor-campos -->
                <br><br>
                <div class="alinear-derecha flex">
                    <input class="btn btn-danger boton" type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>
    </section>
    <!-- Mapa -->

    <section class="col contenedor">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7801.4122368621!2d-76.
        988289!3d-12.132249!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b80b1e826329%3A0xb7b4892996550c40!2sAv.
        %20Alejandro%20Velasco%20Astete%202404%2C%20Lima%2015039!5e0!3m2!1ses!2spe!4v1684952510910!5m2!1ses!2spe" 
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-
        downgrade"></iframe>
    </section>

<?php 
    include './includes/templates/footer.php';

?>