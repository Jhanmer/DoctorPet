<?php

	session_start();
	session_destroy();
?>
	<html>
	<head>
	<title>Doctor Pet</title>
	</head>
	<body>

		<script>alert('Usted ha cerrado Sesion... Redireccionado a la pagina principal')</script>
		<META http-equiv="Refresh" content="1; URL=/index.php" >
	</body>
	</html>
