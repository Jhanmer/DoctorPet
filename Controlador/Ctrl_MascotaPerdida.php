<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);

$error=null;
$mensaje=null;

    if(isset($_POST["enviar"])){
        //capturando datos
        $nom_lost = $_POST["nom_lost"];
        $dia_lost = $_POST["dia_lost"];
        $lugar_lost = $_POST["lugar_lost"];
        $numero_duenio = $_POST["numero_duenio"];
        $tamanio_lost = $_POST["tamanio_lost"];
        $descrip_lost = $_POST["descrip_lost"];
        $imagen = addslashes(file_get_contents($_FILES['imagenlost']['tmp_name']));
        
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");
        $sqlinsert = "insert into dp_mascota_perdida(nombre_perdido,fecha_perdido,visto_perdido,contacto_perdido,tamanio_perdido,descripcion_perdido,imagen_perdido)
                values('$nom_lost','$dia_lost','$lugar_lost',$numero_duenio,'$tamanio_lost','$descrip_lost','$imagen');";
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
