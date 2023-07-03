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
        $nombreMascota= $_POST["nom_masc"];
        $edad = $_POST["edad_masc"];
        $especie = $_POST["especie_masc"];
        $raza = $_POST["raza_masc"];
        if(isset($_POST['genero_masc'])){
            $genero = $_POST["genero_masc"];;
        }else{
            $genero ="";
        }
        $consultaDuenio = $_POST["correo"];

        if(isset($_POST['peso'])){
            $peso = $_POST["peso"];;
        }else{
            $peso ="";
        }
        
        $imagen = addslashes(file_get_contents($_FILES['imgMascota']['tmp_name']));

        $resultadoIDduenio = $con->query("select idCliente from dp_cliente where Email like '%$consultaDuenio%' ");
        while($row = $resultadoIDduenio->fetch_array()){
            $idcliente = $row['idCliente'];  
        }
            $con = fnConnect($msg);
            mysqli_query($con, "start transaction");    
            if(isset($idcliente)){
                $sqlinsert = "insert into dp_mascota(NomMasc,EdadMasc,idEspecie,idRaza,SexoMasc,idCliente,peso,imgMascota)
                        values('$nombreMascota',$edad,$especie,$raza,'$genero',$idcliente,$peso,'$imagen');";
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
