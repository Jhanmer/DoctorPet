<?php
// Establecer conexión con la base de datos
$con = mysqli_connect("localhost", "root", "", "bddoctorpet");

// Verificar conexión
if (mysqli_connect_errno()) {
  echo "Error de conexión: " . mysqli_connect_error();
}

// Recuperar datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$numero = $_POST["numero"];
$idDistrito = $_POST["district"];
$cargo = $_POST["cargo"];

// Insertar datos en la tabla
$query = "INSERT INTO dp_personal (NomPers, ApePers, CorreoPers, NumeroPers, IdDistrito, CargoPers) VALUES ('$nombre', '$apellido', '$correo', '$numero', '$idDistrito', '$cargo')";

if (mysqli_query($con, $query)) {

 /* echo "Datos insertados correctamente";*/
?>

	<h2>Se Registro Correctamente</h2>
	<META http-equiv="Refresh" CONTENT="2; 
	URL=../RTrabajadores.php">
  
	<?php

} else {
  echo "Error al insertar datos: " . mysqli_error($con);
}

// Cerrar conexión
mysqli_close($con);
?>