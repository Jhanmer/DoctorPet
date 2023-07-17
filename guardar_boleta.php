<?php
require('includes/funciones.php');
session_start();

if (!isset($_SESSION["idCliente"])) {
    header("Location: login.php");
    exit();
}

$db = conectarDB2();
$idCliente = $_SESSION["idCliente"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener la imagen subida
    $comprobante_pago = $_FILES["comprobante_pago"]["tmp_name"];

    if ($comprobante_pago) {
        // Leer la imagen como datos binarios
        $imagen_binaria = file_get_contents($comprobante_pago);

        // Obtener el monto total y los productos del carrito
        $query = "SELECT SUM(precioProducto) AS montoTotal, GROUP_CONCAT(CONCAT(c.cantidad, 'x ', IF(c.tipoProducto = 'alimento', a.nombre, IF(c.tipoProducto = 'accesorio', ac.nombre, m.nombre)))) AS productos
                  FROM carrito_compras c
                  LEFT JOIN alimento a ON c.tipoProducto = 'alimento' AND c.idProducto = a.idAlimento
                  LEFT JOIN accesorio ac ON c.tipoProducto = 'accesorio' AND c.idProducto = ac.idAccesorio
                  LEFT JOIN medicamento m ON c.tipoProducto = 'medicamento' AND c.idProducto = m.idMedicamento
                  WHERE c.idCliente = $idCliente";

        $resultado = mysqli_query($db, $query);
        $datos_carrito = mysqli_fetch_assoc($resultado);

        // Generar un código único para la boleta
        $codigoUnico = 'BOL-' . uniqid();

        // Insertar la boleta en la tabla
        $montoTotal = $datos_carrito['montoTotal'];
        $productos = $datos_carrito['productos'];

        $query = "INSERT INTO boleta (idCliente, montoTotal, productos, codigoUnico, imagen) VALUES ($idCliente, $montoTotal, '$productos', '$codigoUnico', ?)";

        // Preparar y ejecutar la consulta con el uso de sentencias preparadas
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, 's', $imagen_binaria);
        mysqli_stmt_execute($stmt);

        // Redirigir a compra_exitosa.php
        header("Location: Carrito.php");
        exit();
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "Solicitud inválida.";
}
?>
