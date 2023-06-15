<?php
require '../Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select t.idCliente, t.nombre, t.apellidos, t.Fecha_nacimiento,t.Genero,
    t.direccion, t.IdDistrito, t.Telefono, t.Email, t.Password, t.cargo, t.Fecha_registro
    from DP_Cliente t;";
$lista= mysqli_query($con, $sql);
$numeracion=0; //contador de registros

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["idCliente"] = $_POST["idCliente"];
        $reg["nombre"] = $_POST["nombre"];
        $reg["apellidos"] = $_POST["apellidos"];
        $reg["Fecha_nacimiento"] = $_POST["Fecha_nacimiento"];
        $reg["Genero"] = $_POST["Genero"];
        $reg["direccion"] = $_POST["direccion"];
        $reg["IdDistrito"] = $_POST["IdDistrito"];
        $reg["Telefono"] = $_POST["Telefono"];
        $reg["Email"] = $_POST["Email"];
        $reg["Password"] = $_POST["Password"];
        $reg["cargo"] = $_POST["cargo"]; 
        $reg["Fecha_registro"] = $_POST["Fecha_registro"]; 
        InsertarCliente($reg, $mensaje, $error);
    }
    function InsertarCliente($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into DP_Cliente(idCliente, nombre, apellidos, Fecha_nacimiento,Genero,
    direccion, IdDistrito, Telefono, Email, Password, cargo, Fecha_registro) values ('{$reg["idCliente"]}','{$reg["nombre"]}','{$reg["apellidos"]}',"
                . "'{$reg["Fecha_nacimiento"]}','{$reg["Genero"]}','{$reg["direccion"]}','{$reg["IdDistrito"]}','{$reg["Telefono"]}',"
                . "'{$reg["Email"]}','{$reg["Password"]}','{$reg["cargo"]}','{$reg["Fecha_registro"]}';";
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

                
         
                

                

                <!-- Hoverable rows start -->
                <section class="section">
                    <div class="row" id="table-hover-row">
                        <div class="col-14">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">TABLA DE CLIENTES</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table hover -->
                                    <div class="table-responsive">

                                    <div class="container-fluid">
                                        <input class="form-control me-2 light-table-filter" data-table="table_id" placeholder="Buscar Cliente"><br>
                                    </div>

                                        <table class="table table-hover mb-0 table_id" id="tblProductos">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOMBRE</th>
                                                    <th>APELLIDO</th>
                                                    <th>FECHA DE NACIMIENTO</th> 
                                                    <th>GENERO</th> 
                                                    <th>DIRECCION</th> 
                                                    <th>DISTRITO</th> 
                                                    <th>TELEFONO</th>
                                                    <th>EMAIL</th>
                                                    <th>CONTRASEÑA</th>
                                                    <th>CARGO</th>
                                                    <th>FECHA DE REGISTRO</th>
                                                    <th>ACCION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
        
                                                $busc= mysqli_query($con, $sql);

                                                if($busc -> num_rows >0){
                                                    while($row= mysqli_fetch_array($busc)){
                                                
                                                
                                                ?> 
                                                <tr>
                                                    <td ><?php echo $row['idCliente']; ?></td>
                                                    <td ><?php echo $row['nombre']; ?></td>
                                                    <td ><?php echo $row['apellidos']; ?></td>
                                                    <td ><?php echo $row['Fecha_nacimiento']; ?></td>
                                                    <td ><?php echo $row['Genero']; ?></td>
                                                    <td ><?php echo $row['direccion']; ?></td>
                                                    <td ><?php echo $row['IdDistrito']; ?></td>
                                                    <td ><?php echo $row['Telefono']; ?></td>
                                                    <td ><?php echo $row['Email']; ?></td>
                                                    <td ><?php echo $row['Password']; ?></td>
                                                    <td ><?php echo $row['cargo']; ?></td>
                                                    <td ><?php echo $row['Fecha_registro']; ?></td>
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