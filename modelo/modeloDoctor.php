<?php

require_once('../Config/conexion.php');

class cUsuario
{
	

	function AgregarConsulta($Data)
	{

		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="call SP_InsertarConsulta('".$Data[0]."','".$Data[1]."','".$Data[2]."','".$Data[3]."','".$Data[4]."');";

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}
	function AgregarReserva($Data)
	{

		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="call SP_InsertarReserva('".$Data[0]."','".$Data[1]."','".$Data[2]."','".$Data[3]."','".$Data[4]."','".$Data[5]."');";

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}
	function Login($user,$pass)
	{
		require_once('../Config/conexion.php');

		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query = "call SP_Login('".$user."','".$pass."')";

		$Result = mysqli_query($Cadena,$Query);

		$cnx->CerrarConexion($Cadena);
		return $Result;
	}
}

?>
