<?php
session_start();

if (isset($_SESSION["autenticado"]) == false) {
	//no hay sesion activa, mostrar un error y redireccionarlo a login
	
	echo"<script>alert('Usted no a iniciado Sesion.. esta siendo redireccionado a la pagina principal')</script>";
	?>
	<META http-equiv="Refresh" content="1; URL=../CAnimalesPerdidos.php" >
	<?php
	exit();
}
elseif($_SESSION["autenticado"] != "Si")
{
	echo"<script>alert('Usted no a iniciado Sesion.. esta siendo redireccionado a la pagina principal')</script>";
	?>
	<META http-equiv="Refresh" content="1; URL=../CAnimalesPerdidos.php" >
	<?php
	exit();

}

?>