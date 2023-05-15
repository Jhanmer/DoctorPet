<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);

$error=null;
$mensaje=null;
    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["nom_lost"] = $_POST["nom_lost"];
        $reg["dia_lost"] = $_POST["dia_lost"];
        $reg["lugar_lost"] = $_POST["lugar_lost"];
        $reg["numero_duenio"] = $_POST["numero_duenio"];
        $reg["tamanio_lost"] = $_POST["tamanio_lost"];
        $reg["descrip_lost"] = $_POST["descrip_lost"];
        InsertarPerdido($reg, $mensaje, $error);
    }
    function InsertarPerdido($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into dp_mascota_perdida(nombre_perdido,fecha_perdido,visto_perdido,contacto_perdido,tamanio_perdido,descripcion_perdido)
                values('{$reg["nom_lost"]}','{$reg["dia_lost"]}',
                '{$reg["lugar_lost"]}',{$reg["numero_duenio"]},'{$reg["tamanio_lost"]}','{$reg["descrip_lost"]}');";
                 //ejecutamos la consulta
        $respuesta = mysqli_query($con, $sqlinsert);
        if($respuesta==0){
            echo '<div class="alerta">Ingrese los datos correctos a los campos</div>';
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
        $mensaje = "<p>Trabajador registrado correctamente..</p>";
    }
?>
