<?php

//guardamos los datos el post
/* validar que exista los datos del post*/

$Data[0] = $_POST["txtNom"];
$Data[1] = $_POST["txtTelefono"];
$Data[2] = $_POST["txtFecha"];
$Data[3] = $_POST["txtCorreo"];
$Data[4] = $_POST["txtMotivo"];

require_once('../modelo/modeloDoctor.php');
$oUsuario = new cUsuario();

$Result =$oUsuario->AgregarConsulta($Data);

if($Result == 1){
	?>
	<h2>Se Registro Correctamente</h2>
	<META http-equiv="Refresh" CONTENT="2; 
	URL=../CAccesorios.php">
	<?php
}
else{
	?>
	<h2>Error</h2>
	<?php echo mysqli_errno($Cadena);
}
?>