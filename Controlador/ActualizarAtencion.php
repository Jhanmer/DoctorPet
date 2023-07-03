<?php
if (isset($_POST['idConsultaPer']) && isset($_POST['estadoSeleccionado'])) {
    $idConsultaPer = $_POST['idConsultaPer'];
    $estadoSeleccionado = $_POST['estadoSeleccionado'];

    // Validar y sanitizar los datos si es necesario

    require_once('../modelo/modeloDoctor.php');
    $oUsuario = new cUsuario();

    $Result = $oUsuario->ActualizarEstadoAtencion($idConsultaPer, $estadoSeleccionado);

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
