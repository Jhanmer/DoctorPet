<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>
<?php 
    require "Config/conexion_bd.php";
    $con = fnConnect($msg);
?>

        <div class="contenedor-botones-perdidos">
            <form action="" method="GET">
                <div class="boton-box2">
                    <input type="text" name="busqueda" placeholder="Búsqueda">
                    <input type="submit" name="enviar" value="Buscar">
                </div>
            </form>    
            <div class="boton-box">
                <a href="Ranimales_perdidos.php">Registrar mascota perdida</a>
            </div>
        </div>
        
        <div class="container">
            <?php 
            if(!isset($_GET['enviar'])){
                $sqlshow="select * from dp_mascota_perdida";
                $resultconsul= mysqli_query($con, $sqlshow);
                while($mostrarlost= mysqli_fetch_array($resultconsul)){       
            ?>
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/meperdi.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: <?php echo $mostrarlost['nombre_perdido'] ?> </h3>
                    <p><strong>Fecha:</strong> <?php echo $mostrarlost['fecha_perdido'] ?> </p>
                    <p><strong>Visto Ultimamente:</strong> <?php echo $mostrarlost['visto_perdido'] ?> </p>
                    <p><strong>Numero de contacto:</strong> <?php echo $mostrarlost['contacto_perdido'] ?> </p>
                    <p><strong>Tamaño:</strong> <?php echo $mostrarlost['tamanio_perdido'] ?> </p>
                    <p><strong>Características:</strong> <?php echo $mostrarlost['descripcion_perdido'] ?> </p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
                </div>
            </div>
            <?php 
                 }   
            }else 
                if(isset($_GET['enviar'])){
                    $busqueda = $_GET['busqueda'];
                    $consultaMP = $con->query("SELECT * FROM dp_mascota_perdida WHERE nombre_perdido LIKE '%$busqueda%' OR descripcion_perdido LIKE '%$busqueda%' "
                            . " OR fecha_perdido LIKE '%$busqueda%' OR visto_perdido LIKE '%$busqueda%' OR contacto_perdido LIKE '%$busqueda%' OR tamanio_perdido LIKE '%$busqueda%' ");
                    while($row = $consultaMP->fetch_array()){
                         
            ?>
            <div class="card">
                <figure>
                    <img src="Imagenes/Servicios/AnimalesPerdidos/meperdi.jpg" alt="" />
                </figure>
                <div class="contenido">
                    <h3>Nombre: <?php echo $row['nombre_perdido'] ?> </h3>
                    <p><strong>Fecha:</strong> <?php echo $row['fecha_perdido'] ?> </p>
                    <p><strong>Visto Ultimamente:</strong> <?php echo $row['visto_perdido'] ?> </p>
                    <p><strong>Numero de contacto:</strong> <?php echo $row['contacto_perdido'] ?> </p>
                    <p><strong>Tamaño:</strong> <?php echo $row['tamanio_perdido'] ?> </p>
                    <p><strong>Características:</strong> <?php echo $row['descripcion_perdido'];  ?> </p><br>
                    <h2>Si me ves, por favor llama a mi familia.</h2>
                    <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo pedir ...">
                        <i class="bi bi-whatsapp"></i> Mas información</a>
                </div>
            </div>
            <?php 
                    }   
                }
            ?>
        </div> 
<?php 
    include './includes/templates/footer.php';

?>