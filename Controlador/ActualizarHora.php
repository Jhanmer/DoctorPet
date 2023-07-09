<?php
if (isset($_POST['idHora']) && isset($_POST['estado'])) {
    $idHora = $_POST['idHora'];
    $estado = $_POST['estado'];

    // Validar y sanitizar los datos si es necesario

    require_once('../modelo/modeloDoctor.php');
    $oUsuario = new cUsuario();

    $Result = $oUsuario->ActualizarEstadoHora($idHora, $estado);

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
