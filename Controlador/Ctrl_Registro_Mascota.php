<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$consultaEspecie = "select * from dp_especie;";
$ListaEspecie = mysqli_query($con, $consultaEspecie);
$consultaRaza = "select * from dp_raza";
$ListaRaza = mysqli_query($con, $consultaRaza);
$error=null;
$mensaje=null;

    if(isset($_POST["enviar"])){
        //capturando datos
        $reg["nom_masc"] = $_POST["nom_masc"];
        $reg["edad_masc"] = $_POST["edad_masc"];
        $reg["especie_masc"] = $_POST["especie_masc"];
        $reg["raza_masc"] = $_POST["raza_masc"];
        if(isset($_POST['genero_masc'])){
            $reg["genero_masc"] = $_POST["genero_masc"];;
        }else{
            $reg["genero_masc"] ="";
        }
        $consultaDuenio = $_POST['coreo_dueño'];
        if(isset($_POST['peso'])){
            $reg["peso"] = $_POST["peso"];;
        }else{
            $reg["peso"] ="";
        }
        
        $resultadoIDduenio = $con->query("select idCliente from dp_cliente where Email like '%$consultaDuenio%' ");
        while($row = $resultadoIDduenio->fetch_array()){
            $reg["idCliente"] = $row['idCliente'];  
        }
        InsertarMacota($reg, $mensaje, $error);
    }
    
    function InsertarMacota($reg, &$mensaje, &$error){
        $con = fnConnect($msg);
        mysqli_query($con, "start transaction");    
        if(isset($reg["idCliente"])){
        $sqlinsert = "insert into dp_mascota(NomMasc,EdadMasc,idEspecie,idRaza,SexoMasc,idCliente,peso)
                values('{$reg["nom_masc"]}','{$reg["edad_masc"]}',{$reg["especie_masc"]},{$reg["raza_masc"]},'{$reg["genero_masc"]}',{$reg["idCliente"]},{$reg["peso"]});";
        $respuesta = mysqli_query($con, $sqlinsert);
        if($respuesta==0){
            echo '<div class="alerta">Ingrese los datos correctos a los campos</div>';
            mysqli_query($con,"rollback");
            $error = "<p>Datos ingresados no son correctos...</p>";
            $error .= "<p>SQL: $sqlinsert </p>"; return;
        }
        if($respuesta==1){
            echo '<div class="success">Registro completado</div>';
        }
        mysqli_query($con, "commit");
        $mensaje = "<p>Trabajador registrado correctamente..</p>";
        }else{
            echo '<div class="alerta">Ingrese un correo valido</div>';
        }
    }
?>
