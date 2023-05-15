<?php

if(!empty($_POST['registro'])){
    if(empty($_POST['nombres'])){echo '<div class="alerta">El campo de NOMBRES está vacío</div>';}
    if(empty($_POST['apellidos'])){echo '<div class="alerta">El campo de APELLIDOS está vacío</div>'; }
    if(empty($_POST['fecha_nacimiento'])){echo '<div class="alerta">El campo de FECHA NACIMIENTO está vacío</div>';}
    if(empty($_POST['gender'])){echo '<div class="alerta">El campo de GÉNERO está vacío</div>';}
    if(empty($_POST['direccion'])){echo '<div class="alerta">El campo de DIRECCIÓN está vacío</div>';} 
    if(empty($_POST['district'])){echo '<div class="alerta">El campo de DISTRITO está vacío</div>';}
    if(empty($_POST['telefono'])){echo '<div class="alerta">El campo de TELÉFONO está vacío</div>';}
    if(empty($_POST['correo'])){echo '<div class="alerta">El campo de CORREO está vacío</div>';}
    if(empty($_POST['contraseña'])){echo '<div class="alerta">El campo de CONTRASEÑA está vacío</div>';
    }else{
        $nombre=$_POST['nombres'];
        $apellido=$_POST['apellidos'];
        $contraseña=$_POST['contraseña'];
        $fecha_nacimiento=$_POST['fecha_nacimiento'];   
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }else{
            $gender ="";
        }
        $direccion=$_POST['direccion'];
        $district=$_POST['district'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        
        $sql=$con->query("insert into dp_cliente(nombre,apellidos,Email,Fecha_nacimiento,Genero,direccion,IdDistrito,Telefono,Password)
                values('$nombre','$apellido','$correo','$fecha_nacimiento','$gender','$direccion','$district','$telefono','$contraseña')");
        if($sql==1){
            echo '<div class="success">Usuario registrado correctamente</div>';
        }else{
            echo '<div class="alerta">¡¡¡ERROR AL MOMENTO DE REGISTRAR!!!</div>';
        }    
        }
    }
?>