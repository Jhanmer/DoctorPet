<?php

class Conexion
{
	private $usuario;
	private $clave;
	private $servidor;
	private $basededatos;

	function __construct()
	{
		$this->usuario = "root";
		$this->clave = "";
		$this->servidor = "localhost";
		$this->basededatos = "bddoctorpet";
	}

	function AbrirConexion()
	{
		$cadena = mysqli_connect($this->servidor, $this->usuario, $this->clave, $this->basededatos);
		if (mysqli_connect_error()) {
			die("Error al conectar con MySQL: " . mysqli_connect_error());
		} else {
			return $cadena;
		}
	}


	function CerrarConexion($cadena)
	{
		mysqli_close($cadena);
	}
}
