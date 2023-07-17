<?php
require('includes/funciones.php');
session_start();
// Verificar que el usuario esté logueado
if (!isset($_SESSION["idCliente"])) {
    header("Location: login.php");
    exit();
}
// Obtener los datos enviados por el formulario
$idProducto = $_POST["idProducto"];
$tipoProducto = $_POST["tipoProducto"];
$idCliente = $_SESSION["idCliente"];

// Conectar a la base de datos
$db = conectarDB2();

// Obtener el precio del producto desde la tabla respectiva
$precioProducto = 0;

if ($tipoProducto === 'alimento') {
    $query = "SELECT precio FROM alimento WHERE idAlimento = $idProducto";
} elseif ($tipoProducto === 'accesorio') {
    $query = "SELECT precio FROM accesorio WHERE idAccesorio = $idProducto";
} elseif ($tipoProducto === 'medicamento') {
    $query = "SELECT precio FROM medicamento WHERE idMedicamento = $idProducto";
}

$resultado = mysqli_query($db, $query);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $producto = mysqli_fetch_assoc($resultado);
    $precioProducto = $producto['precio'];
}
// Verificar si el producto ya existe en el carrito
$query = "SELECT * FROM carrito_compras WHERE idCliente = $idCliente AND idProducto = $idProducto AND tipoProducto = '$tipoProducto'";
$resultado = mysqli_query($db, $query);

if (mysqli_num_rows($resultado) > 0) {
    // El producto ya está en el carrito, aumentar la cantidad y actualizar el precio del producto
    $query = "UPDATE carrito_compras SET cantidad = cantidad + 1, precioProducto = precioProducto + $precioProducto WHERE idCliente = $idCliente AND idProducto = $idProducto AND tipoProducto = '$tipoProducto'";
    mysqli_query($db, $query);
} else {
    // Agregar el producto al carrito con una cantidad de 1 y guardar el precio del producto
    $query = "INSERT INTO carrito_compras (idCliente, idProducto, tipoProducto, cantidad, precioProducto) VALUES ($idCliente, $idProducto, '$tipoProducto', 1, $precioProducto)";
    mysqli_query($db, $query);
}
// Redireccionar al usuario a la página del producto donde estaba
header("Location: $_SERVER[HTTP_REFERER]");
exit();
