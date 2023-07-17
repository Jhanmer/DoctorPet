<?php
require('includes/funciones.php');
$db = conectarDB2();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto_id = $_POST["producto_id"];
    $tipo_producto = $_POST["tipo_producto"];
    // Consulta para eliminar el producto del carrito
    $query = "DELETE FROM carrito_compras WHERE idProducto = $producto_id AND tipoProducto = '$tipo_producto'";
    $resultado = mysqli_query($db, $query);

    if ($resultado) {
        header("Location: carrito.php");
        exit();
    } else {
        echo "Error al eliminar el producto del carrito.";
    }
} else {
    echo "Solicitud inválida.";
}
// Redirigir de regreso a la página del carrito de compras
header('Location: carrito.php');
exit();
?>
