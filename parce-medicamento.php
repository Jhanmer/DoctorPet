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
                <img src="/imagenes3/<?php echo $propiedad['imagen'] . ".jpg" ?>" alt="imagen producto">
            </div>
            <div class="texto">
                <h4> <?php echo $propiedad['nombre'] ?></h4>
                <p><?php echo $propiedad['descripcion'] ?></p>
                <h4>S/.<?php echo $propiedad['precio'] ?></h4>
            </div>
            <!-- ... mostrar la información del producto ... -->
            <form action="agregar_al_carrito.php" method="POST">
                <input type="hidden" name="idProducto" value="<?php echo $propiedad['idMedicamento']; ?>">
                <input type="hidden" name="tipoProducto" value="medicamento">
                <input type="submit" class="alert alert-primary" value="Agregar al carrito">
            </form>
        </div>
    <?php endwhile; ?>

</section>

<!-- fin de productos para gatos -->

<style>
    .producto-base {
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease;
    }

    .producto-base:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .imagen {
        position: relative;
        overflow: hidden;
    }

    .imagen img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
        transition: transform 0.3s ease;
    }

    .imagen:hover img {
        transform: scale(1.3);
    }

    .texto {
        text-align: center;
    }

    .texto h4 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .texto p {
        font-size: 14px;
        margin-bottom: 10px;
    }

    .agregar {
        background-color: #007bff;
        color: #fff;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .agregar:hover {
        background-color: #0056b3;
    }
</style>