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
	function RegistrarPago($Data)
	{

		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="call SP_RegistrarPagoReserva('".$Data[0]."','".$Data[1]."','".$Data[2]."','".$Data[3]."','".$Data[4]."','".$Data[5]."','".$Data[6]."','".$Data[7]."');";

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}
	function ActualizarEstadoPago($idConsultaPer,$estadoPago){
		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="UPDATE dp_consultapersonalizada set estadoPago='$estadoPago' WHERE idConsultaPer = '$idConsultaPer'";

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}
	function ActualizarEstadoAtencion($idConsultaPer,$estadoAte){
		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="UPDATE dp_consultapersonalizada set estadoAtencion='$estadoAte' WHERE idConsultaPer = '$idConsultaPer'" ;

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}
	function ActualizarEstadoConsulta($idConsulta,$estadoCons){
		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="UPDATE dp_consulta set estadoAtencion='$estadoCons' WHERE idConsulta = '$idConsulta'" ;

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}
	function ActualizarEstadoHora($idHora,$estado){
		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="UPDATE dp_hora set estado='$estado' WHERE idHora = '$idHora'" ;

		$Result = mysqli_query($Cadena, $Query);

		$cnx->CerrarConexion($Cadena);

		return  $Result;
	}
	function ActualizarPedido($idBoleta, $estadoPedido){
		$cnx = new conexion();

		$Cadena = $cnx->AbrirConexion();

		$Query ="UPDATE boleta set estado='$estadoPedido' WHERE idBoleta = '$idBoleta'" ;

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
