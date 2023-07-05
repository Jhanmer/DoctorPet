<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$sql = "select c.nombre, c.comentario, c.fechaC from comentarios c;";
$error=null;
$mensaje=null;

    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["nombre"] = $_POST["nombre"];
        $reg["comentario"] = $_POST["comentario"];
        InsertarMacota($reg, $mensaje, $error);
    }
    
    function InsertarMacota($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into comentarios(nombre, comentario)"
                . "values ('{$reg["nombre"]}','{$reg["comentario"]}');";
                 //ejecutamos la consulta
        $respuesta = mysqli_query($con, $sqlinsert);
        if($respuesta==0){
            echo '<div class="alerta">No se pudo registrar</div>';
            mysqli_query($con,"rollback");
            $error = "<p>Datos ingresados no son correctos...</p>";
            $error .= "<p>SQL: $sqlinsert </p>";
            return;
        }
        if($respuesta==1){
            echo '<div class="success">Registro completado</div>';
        }
        //hacemos permanente los cambios
        mysqli_query($con, "commit");
        $mensaje = "<p>Proveedor registrado correctamente..</p>";
    }
?>
