<?php
require '../Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select m.idMascota, m.NomMasc, m.EdadMasc, m.idEspecie,m.idRaza,
   m.SexoMasc, m.idCliente,m.peso,m.imgMascota from DP_Mascota m;";
$lista= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["idMascota"] = $_POST["idMascota"];
        $reg["NomMasc"] = $_POST["NomMasc"];
        $reg["EdadMasc"] = $_POST["EdadMasc"];
        $reg["idEspecie"] = $_POST["idEspecie"];
        $reg["idRaza"] = $_POST["idRaza"];
        $reg["SexoMasc"] = $_POST["SexoMasc"];
        $reg["idCliente"] = $_POST["idCliente"];
        $reg["peso"] = $_POST["peso"];
        $reg["imgMascota"] = $_POST["imgMascota"];
        InsertarCliente($reg, $mensaje, $error);
    }
    function InsertarCliente($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into DP_Cliente(idMascota, NomMasc, EdadMasc, idEspecie,idRaza,
        SexoMasc, idCliente, peso,imgMascota) values ('{$reg["idMascota"]}',"
    . "             '{$reg["NomMasc"]}','{$reg["EdadMasc"]}','{$reg["idEspecie"]}',"
    . "             '{$reg["idRaza"]}','{$reg["SexoMasc"]}','{$reg["idCliente"]}','{$reg["peso"]}','{$reg["imgMascota"]}';";
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
    include ('barra-lateral.php');
?>
        <!-- Contenido -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tablas de Datos</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                
         
                <div class="container-fluid">
                     <input class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar Mascota"><br>
                </div>

                

                <!-- Hoverable rows start -->
                <section class="section">
                    <div class="row" id="table-hover-row">
                        <div class="col-14">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">TABLA DE MASCOTAS</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table hover -->
                                    <div class="table-responsive">

                                    

                                        <table class="table table-hover mb-0 table_id" id="tblProductos">
                                            <thead>
                                            <tr>
                                                <th class="colorCabecera">ID</th>
                                                <th class="colorCabecera">NOMBRE</th>
                                                <th class="colorCabecera">EDAD</th>
                                                <th class="colorCabecera">ESPECIE</th>
                                                <th class="colorCabecera">RAZA</th>
                                                <th class="colorCabecera">SEXO</th> 
                                                <th class="colorCabecera">CLIENTE</th>
                                                <th class="colorCabecera">PESO</th>
                                                <th class="colorCabecera">IMAGEN</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
        
                                                $busc= mysqli_query($con, $sql);

                                                if($busc -> num_rows >0){
                                                    while($row= mysqli_fetch_array($busc)){
                                                
                                                
                                                ?> 
                                                <tr>
                                                    <td ><?php echo $row['idMascota']; ?></td>
                                                    <td ><?php echo $row['NomMasc']; ?></td>
                                                    <td ><?php echo $row['EdadMasc']; ?></td>
                                                    <td ><?php echo $row['idEspecie']; ?></td>
                                                    <td ><?php echo $row['idRaza']; ?></td>
                                                    <td ><?php echo $row['SexoMasc']; ?></td>
                                                    <td ><?php echo $row['idCliente']; ?></td>
                                                    <td ><?php echo $row['peso']; ?></td>
                                                    <td ><?php echo $row['imgMascota']; ?></td>
                                                </tr>
                                               <?php
                                                }
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hoverable rows end -->

                
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    
                    <div class="float-end">
                    <div class="float-start">
                        <p>2023 &copy; DoctorPet</p>
                    </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>
<script src="../js/buscador.js" type="text/javascript"></script>   
</html>