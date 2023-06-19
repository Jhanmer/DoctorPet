<?php
//Importar la conexion

$db = conectarDB();

//consultar
$query = "SELECT * FROM medicamento LIMIT $limite";

//obtener los resultados
$resultado = mysqli_query($db, $query);


?>
<section class="producto">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
        <div class="producto-base">
            <div class="imagen">
                <img src="/imagenes3/<?php echo $propiedad['imagen']. ".jpg" ?>" alt="imagen producto">
            </div>
            <div class="texto">
                <h4> <?php echo $propiedad['nombre'] ?></h4>
                <p><?php echo $propiedad['descripcion'] ?></p>
                <h4>S/.<?php echo $propiedad['precio'] ?></h4>
                <input type="submit" class="alert alert-primary" value="Agregar">
            </div>
        </div>
    <?php endwhile; ?>

</section><!-- fin de productos para gatos -->