<?php
require('includes/funciones.php');
session_start();

if (!isset($_SESSION["idCliente"])) {
    header("Location: login.php");
    exit();
}

$db = conectarDB2();

$idCliente = $_SESSION["idCliente"];

// 1. Registrar la compra en la tabla `compras_realizadas`
$query = "INSERT INTO compras_realizadas (idCliente) VALUES ($idCliente)";
mysqli_query($db, $query);

// Obtener el ID de la última compra realizada para usarlo más adelante
$idCompra = mysqli_insert_id($db);

// 2. Transferir los productos del carrito a la tabla `detalles_compra`

// Crear la tabla detalles_compra si no existe
$query = "CREATE TABLE IF NOT EXISTS `detalles_compra` (
    `idDetalle` int(11) NOT NULL AUTO_INCREMENT,
    `idCompra` int(11) NOT NULL,
    `idProducto` int(11) NOT NULL,
    `tipoProducto` enum('alimento','accesorio','medicamento') NOT NULL,
    `cantidad` int(11) NOT NULL,
    PRIMARY KEY (`idDetalle`),
    KEY `fk_idCompra` (`idCompra`),
    CONSTRAINT `fk_idCompra` FOREIGN KEY (`idCompra`) REFERENCES `compras_realizadas` (`idCompra`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

mysqli_query($db, $query);

// Obtener los productos del carrito para el cliente actual
$query = "SELECT * FROM carrito_compras WHERE idCliente = $idCliente";
$resultado = mysqli_query($db, $query);

// Transferir los productos a la tabla detalles_compra y actualizar el stock
while ($producto = mysqli_fetch_assoc($resultado)) {
$idProducto = $producto['idProducto'];
$tipoProducto = $producto['tipoProducto'];
$cantidad = $producto['cantidad'];

$query = "INSERT INTO detalles_compra (idCompra, idProducto, tipoProducto, cantidad) 
      VALUES ($idCompra, $idProducto, '$tipoProducto', $cantidad)";
mysqli_query($db, $query);

// Actualizar el stock en la tabla correspondiente
if ($tipoProducto === 'alimento') {
$query = "UPDATE alimento SET stock = stock - $cantidad WHERE idAlimento = $idProducto";
} elseif ($tipoProducto === 'accesorio') {
$query = "UPDATE accesorio SET stock = stock - $cantidad WHERE idAccesorio = $idProducto";
} elseif ($tipoProducto === 'medicamento') {
$query = "UPDATE medicamento SET stock = stock - $cantidad WHERE idMedicamento = $idProducto";
}

mysqli_query($db, $query);
}

// Eliminar los productos del carrito
$query = "DELETE FROM carrito_compras WHERE idCliente = $idCliente";
mysqli_query($db, $query);

// Fin del proceso de compra
// Aquí puedes redirigir a una página de "Compra Exitosa" o mostrar un mensaje al usuario, etc.

// Por ejemplo:
header("Location: compra_exitosa.php");
exit();
?>
