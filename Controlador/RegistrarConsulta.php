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
<html lang="en">
	<head>
		<META http-equiv="Refresh" CONTENT="2; URL=/index.php">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
		<style>
			@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
			@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
		</style>
		<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
		<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
		<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
	</head>
	<body>
		<header class="site-header" id="header">
			<h1 class="site-header__title" data-lead-id="site-header-title">Gracias!</h1>
		</header>

		<div class="main-content">
			<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
			<p class="main-content__body" data-lead-id="main-content-body">Muchas gracias por llenar eso. ¡Significa mucho para nosotros, al igual que usted! Realmente te apreciamos giving us a moment of your time today. Thanks for being you.</p>
		</div>

		<footer class="site-footer" id="footer">
			<p class="site-footer__fineprint" id="fineprint">Copyright ©2023 | Reservados todos los derechos</p>
		</footer>
	</body>
</html>
	<?php
}
else{
	?>
	<h2>Error</h2>
	<?php echo mysqli_errno($Cadena);
}
?>