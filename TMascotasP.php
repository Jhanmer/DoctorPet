<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select m.Id_perdidos, m.nombre_perdido, m.fecha_perdido, m.visto_perdido,m.contacto_perdido,
   m.tamanio_perdido, m.descripcion_perdido from DP_mascota_perdida m;";
$lista= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["Id_perdidos"] = $_POST["Id_perdidos"];
        $reg["nombre_perdido"] = $_POST["nombre_perdido"];
        $reg["fecha_perdido"] = $_POST["fecha_perdido"];
        $reg["visto_perdido"] = $_POST["visto_perdido"];
        $reg["contacto_perdido"] = $_POST["contacto_perdido"];
        $reg["tamanio_perdido"] = $_POST["tamanio_perdido"];
        $reg["descripcion_perdido"] = $_POST["descripcion_perdido"];
        InsertarCliente($reg, $mensaje, $error);
    }
    function InsertarCliente($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into DP_mascota_perdida(Id_perdidos, nombre_perdido, fecha_perdido, visto_perdido,contacto_perdido,
        tamanio_perdido, descripcion_perdido) values ('{$reg["Id_perdidos"]}',"
    . "             '{$reg["nombre_perdido"]}','{$reg["fecha_perdido"]}','{$reg["visto_perdido"]}',"
    . "             '{$reg["contacto_perdido"]}','{$reg["tamanio_perdido"]}','{$reg["descripcion_perdido"]}';";
                 //ejecutamos la consulta
        $respuesta = mysqli_query($con, $sqlinsert);
        if(!$respuesta){
            mysqli_query($con,"rollback");
            $error = "<p>Datos ingresados no son correctos...</p>";
            $error .= "<p>SQL: $sqlinsert </p>";
            return;
        }
        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Cliente registrado correctamente..</p>";
    }
?>


    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
        <title>Doctor Pet - Tabla Mascotas Perdidas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="estilos/css/header.css" rel="stylesheet" type="text/css"/>
    </head>
    
     <header>
        <body class="p-5 m-0 border-2 bd-example"> 
        <div class="container-fluid">

            <div class="navb-logo">
                <a href="index.html">
                    <img src="estilos/img/DP-DoctorPet.png" alt="Logo">
                </a>

            </div>

            <div class="navb-items d-none d-xl-flex">

                <div class="item">
                    <a href="index.html">Inicio</a>
                </div>

                <div class="item">
                    <a href="servicios.html">Servicio</a>
                </div>

                <div class="item">
                    <a href="productos.html">Productos</a>
                </div>

                <div class="item">
                    <a href="contacto.html">Contactanos</a>
                </div>

                <div class="item">
                    <a href="nosotros.html">Nosotros</a>
                </div>

                <div class="item">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>

                <div class="item-button">
                    <a href="login.html" type="button">Iniciar Sesion</a>
                </div>
            </div>

            <!-- Button trigger modal -->
            <div class="mobile-toggler d-lg-none">
                <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <img src="estilos/img/DP-DoctorPet.png" alt="Logo">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fa-solid fa-xmark"></i></button>
                        </div>

                        <div class="modal-body">

                            <div class="modal-line">
                                <i class="fa-solid fa-house"></i><a href="index.html">Inicio</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-bell-concierge"></i><a href="servicios.html">Servicios</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-file-lines"></i> <a href="productos.html">Productos</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-circle-info"></i><a href="contacto.html">Contacto</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-circle-info"></i><a href="nosotros.html">Nosotros</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>

                            <a href="login.html" class="navb-button" type="button">Iniciar sesion</a>
                        </div>

                        <div class="mobile-modal-footer">

                            <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <br><br><br>
        <h1 Style="align='left'">TABLA DE MASCOTAS PERDIDAS</h1>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" _msthash="1940757" _msttexthash="381446">Registros</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="1813266" _mstaria-label="320099">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1150123" _msttexthash="300144">Registros de Usuarios</a>
                            <ul class="dropdown-menu" _msthidden="3">
                                <li _msthidden="1"><a class="dropdown-item" href="TClientes.php" _msthash="1722032" _msttexthash="76466" _msthidden="2">Clientes</a></li>
                                <li _msthidden="1"><a class="dropdown-item" href="TEmpleados.php" _msthash="1722214" _msttexthash="232752" _msthidden="1">Trabajadores</a></li>
                                <li _msthidden="1"><a class="dropdown-item" href="TMascotas.php" _msthash="1722214" _msttexthash="232752" _msthidden="1">Mascotas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1150123" _msttexthash="300144">Registro de Consultas</a>
                            <ul class="dropdown-menu" _msthidden="3">
                                <li><a class="dropdown-item" href="TConsultas.php">Consultas</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1150123" _msttexthash="300144">Registro de Animales Perdidos</a>
                            <ul class="dropdown-menu" _msthidden="3">
                                <li><a class="dropdown-item" href="TMascotasP.php">Animales Perdidos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><br>
        
        
        <table class="table table-dark table-striped table-hover table_id" id="tblProductos">
            <thead>
                <tr class="Lineas">
                    <th colspan="8" class="colorCabecera"> LISTA DE MASCOTAS PERDIDAS</th>                   
                </tr>
                <tr>
                    <th class="colorCabecera">ID</th>
                    <th class="colorCabecera">NOMBRE</th>
                    <th class="colorCabecera">FECHA DE PERDIDA</th>
                    <th class="colorCabecera">VISTO ULT. VEZ</th>
                    <th class="colorCabecera">CONTACTO</th>
                    <th class="colorCabecera">TAMAÑO</th> 
                    <th class="colorCabecera">DESCRIPCION</th>
                </tr>
            </thead>    
            <tbody>
        <?php
        $sql = "Select m.Id_perdidos, m.nombre_perdido, m.fecha_perdido, m.visto_perdido,m.contacto_perdido,
        m.tamanio_perdido, m.descripcion_perdido from DP_mascota_perdida m;";
        $busc= mysqli_query($con, $sql);

        if($busc -> num_rows >0){
            while($row= mysqli_fetch_array($busc)){
          
        
        ?> 
        <tr>
            <td ><?php echo $row['Id_perdidos']; ?></td>
            <td ><?php echo $row['nombre_perdido']; ?></td>
            <td ><?php echo $row['fecha_perdido']; ?></td>
            <td ><?php echo $row['visto_perdido']; ?></td>
            <td ><?php echo $row['contacto_perdido']; ?></td>
            <td ><?php echo $row['tamanio_perdido']; ?></td>
            <td ><?php echo $row['descripcion_perdido']; ?></td>
        </tr>
            
        <?php
}
}

?>

</table>       

  </body>
        
</html>


