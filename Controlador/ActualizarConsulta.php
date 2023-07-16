<?php
if (isset($_POST['idConsulta']) && isset($_POST['estadoSeleccionado'])) {
    $idConsulta = $_POST['idConsulta'];
    $estadoSeleccionado = $_POST['estadoSeleccionado'];

    // Validar y sanitizar los datos si es necesario

    require_once('../modelo/modeloDoctor.php');
    $oUsuario = new cUsuario();

    $Result = $oUsuario->ActualizarEstadoConsulta($idConsulta, $estadoSeleccionado);

    if ($Result == 1) {
        $response = array('success' => true, 'message' => 'Actualización exitosa');
    } else {
        $response = array('success' => false, 'message' => 'Error al actualizar el estado de pago');
    }
} else {
    $response = array('success' => false, 'message' => 'Datos incompletos');
}

// Enviar la respuesta al cliente en formato JSON
header('Content-Type: application/json');
echo json_encode($response);
exit;
?>
