<?php
require('includes/funciones.php');
incluirTemplate('header');
?>
<link rel="stylesheet" href="/estilos/css/comentario.css">

<link rel="stylesheet" href="/estilos/css/MostarComentario.css">


<!-- Comentario -->

<section>

    <form class="minimalista-formulario" method="post">
        <?php include 'Controlador/Ctrl_Comentario.php'; ?>
        <fieldset>
            <legend>DEJANOS TU COMENTARIO!</legend>

            <div class="minimalista-contenedor-campos">
                <div class="minimalista-campo">
                    <label>Nombre</label>
                    <input class="minimalista-input-text" type="text" name="nombre" readonly value="<?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellidos']; ?>" required>
                </div>

                <div class="minimalista-campo">
                    <label>Mensaje</label>
                    <textarea class="minimalista-input-text" name="comentario" placeholder="¿Qué te parece nuestro servicio?"></textarea>
                </div>
            </div> <!-- .minimalista-contenedor-campos -->
            <div class="minimalista-alinear-derecha flex">
                <input class="minimalista-btn minimalista-btn-danger minimalista-boton" type="submit" name="enviar" value="Registrar" id="enviar">
            </div>
        </fieldset>
    </form>

    <?php

    $busc = mysqli_query($con, $sql);

    if ($busc->num_rows > 0) {
        while ($row = mysqli_fetch_array($busc)) {
    ?>
            <div class="listita-comment">
                <ul id="comments-list" class="comments-list">
                    <li>
                        <div class="comment-main-level">
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt=""></div>
                            <!-- Contenedor del Comentario -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name by-author"><a href="http://creaticode.com/blog"><?php echo $row['nombre']; ?></a></h6>
                                    <span>hace 1 minutos</span>
                                    <i class="fa fa-reply"></i>
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="comment-content">
                                    <?php echo $row['comentario']; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div>

            <?php
        }
    }

            ?>

</section>
<?php
include './includes/templates/footer.php';

?>