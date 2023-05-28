<?php

//Importar la conexion
require '../includes/config/database.php';
$db = conectarDB();
//Escribir el query
$query = "SELECT * FROM comidap";
//consultar el query
$resultadoConsulta = mysqli_query($db, $query);

//Mostrar los resultados
//boton eliminar
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT); 
    
    if($id){
        //Elimianr imagen
        $query = "SELECT imagen FROM comidap WHERE idComidap = $id ";

        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);
        unlink('../image/' . $propiedad['imagen'] . ".jpg");
        
        //Eliminar la propiedad
        $query = "DELETE FROM  comidap WHERE idComidap = $id ";
        $resulado = mysqli_query($db, $query);

        if($resulado){
            header('location: /admin');
        }
    }
}

//CONDICIONAL 
$mensaje = $_GET['mensaje'] ?? null;
$result = $_GET['resultado'] ?? null;

require('../includes/funciones.php');
incluirTemplate('header');
?>

<main class="contenedor">
    <br><br>
    <h1>Administrador Doctor Pet</h1>
    <?php if ($mensaje) : ?>
        <div class="alert alert-primary d-flex align-items-center" role="alert" style=" font-size: 20px; margin: auto; width: 70%; text-align:center; ">
            <svg class="bi flex-shrink-0 me-2"  height="24" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <div>
            <i class="fa-solid fa-check"></i> Alimento Registrado Correctamente
            </div>
        </div>
    <?php elseif($result == 2): ?>
        <div class="alert alert-primary d-flex align-items-center" role="alert" style=" font-size: 20px; margin: auto; width: 70%; text-align:center; ">
            <svg class="bi flex-shrink-0 me-2"  height="24" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <div>
            <i class="fa-solid fa-check"></i> Alimento Actualizado Correctamente
            </div>
        </div>
        
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php"><input type="submit" class="btn btn-primary" style="font-size: 15px;" value="Nuevo Producto"></input></a>
          
    <table class="propiedades" style="font-size: 20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Precio S/.</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody><!-- Mostrar los resultados -->
        <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)):?>
            <tr>
                <td><?php echo $propiedad['idComidap']; ?></td>
                <td><?php echo $propiedad['nombre']; ?></td>
                <td><?php echo $propiedad['descripcion']; ?></td>
                <td><img src="/image/<?php echo $propiedad['imagen'] . ".jpg" ;?>" alt="">  </td>
                <td><?php echo $propiedad['precio'];?></td>
                <td>
                    <div class="btn btn-primary" style="font-size: 15px;">
                    <i class="fa-solid fa-pen"></i> <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['idComidap'] ?>">Actualizar</a>
                    </div>
                    <br><br>
                    <form method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo $propiedad['idComidap']; ?>">
                    <i class="fa-solid fa-trash" style="color: red; "></i><input type="submit" value="Eliminar" class="btn btn-danger" style="font-size: 15px;">
                    
                    </form>
                    
                    
                </td>
            </tr>
        </tbody>
        <?php endwhile; ?>
    </table>

</main>


<?php
//Cerrar la conexion
mysqli_close($db);
incluirTemplate('footer');
?>