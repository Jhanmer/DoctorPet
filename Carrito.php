<?php
require('includes/funciones.php');
incluirTemplate('header');

if (!isset($_SESSION["idCliente"])) {
    header("Location: login.php");
    exit();
}

$db = conectarDB2();
$idCliente = $_SESSION["idCliente"];

$query = "SELECT c.*, a.nombre AS nombreAlimento, ac.nombre AS nombreAccesorio, m.nombre AS nombreMedicamento, 
                 a.precio AS precioAlimento, ac.precio AS precioAccesorio, m.precio AS precioMedicamento
          FROM carrito_compras c
          LEFT JOIN alimento a ON c.tipoProducto = 'alimento' AND c.idProducto = a.idAlimento
          LEFT JOIN accesorio ac ON c.tipoProducto = 'accesorio' AND c.idProducto = ac.idAccesorio
          LEFT JOIN medicamento m ON c.tipoProducto = 'medicamento' AND c.idProducto = m.idMedicamento
          WHERE c.idCliente = $idCliente";

$resultado = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Carrito de Compras</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        tr:hover {
            background-color: #f0f0f0;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        .total {
            font-weight: bold;
        }

        .acciones {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .eliminar {
            background-color: #ff5959;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .eliminar:hover {
            background-color: #e70000;
        }

        .comprobante-form {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .comprobante-form input[type="file"] {
            display: none;
        }

        .comprobante-form button {
            background-color: #1D8348;
            color: #fff;
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .comprobante-form button:hover {
            background-color: #00b359;
        }

        .realizar-compra {
            display: block;
            text-align: center;
            color: #fff;
            background-color: #154360;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .realizar-compra:hover {
            background-color: #7FB3D5;
        }

        .eliminar {
            background-color: #ff5959;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .eliminar:hover {
            background-color: #e70000;
        }

        .metodo-pago {
            max-width: 200px;
            /* Ajusta el tamaño máximo de la imagen */
            display: block;
            /* Asegura que la imagen sea un elemento de bloque para alinear correctamente */
            margin: 0 auto;
            /* Centra horizontalmente la imagen */
            border: 2px solid #ccc;
            /* Agrega un borde de 2px alrededor de la imagen */
            border-radius: 4px;
            /* Agrega un borde redondeado */
            padding: 5px;
            /* Agrega un pequeño espacio entre el borde y la imagen */
        }

        label {
            width: auto;
            padding: 5px;
            margin: auto;
            border-radius: 3px;
            color: black;
            background-color: rgba(46, 204, 113, 0.4);
        }
    </style>
</head>

<body>

    <br>
    <h1>Carrito de Compras</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Precio unitario</th>
            <th>Total por producto</th>
            <th>Acciones</th>
        </tr>
        <?php
        $totalCarrito = 0;

        while ($producto = mysqli_fetch_assoc($resultado)) :
            $subtotalProducto = 0;

            if ($producto['tipoProducto'] === 'alimento') {
                $subtotalProducto = $producto['cantidad'] * $producto['precioAlimento'];
            } elseif ($producto['tipoProducto'] === 'accesorio') {
                $subtotalProducto = $producto['cantidad'] * $producto['precioAccesorio'];
            } elseif ($producto['tipoProducto'] === 'medicamento') {
                $subtotalProducto = $producto['cantidad'] * $producto['precioMedicamento'];
            }

            $totalCarrito += $subtotalProducto;
        ?>
            <tr>
                <td><?php echo $producto['nombreAlimento'] ?? $producto['nombreAccesorio'] ?? $producto['nombreMedicamento']; ?></td>
                <td><?php echo ucfirst($producto['tipoProducto']); ?></td>
                <td><?php echo $producto['cantidad']; ?></td>
                <td>S/. <?php echo number_format($producto['precioAlimento'] ?? $producto['precioAccesorio'] ?? $producto['precioMedicamento'], 2); ?></td>
                <td>S/. <?php echo number_format($subtotalProducto, 2); ?></td>
                <td>
                    <form method="post" action="eliminar_del_carrito.php">
                        <input type="hidden" name="producto_id" value="<?php echo $producto['idProducto']; ?>">
                        <input type="hidden" name="tipo_producto" value="<?php echo $producto['tipoProducto']; ?>">
                        <button class="eliminar" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
        <tr>
            <td colspan="4"></td>
            <td>Total del carrito:</td>
            <td>S/. <?php echo number_format($totalCarrito, 2); ?></td>
        </tr>
    </table>

    <img class="metodo-pago" src="/Imagenes/visa.png" alt="Metodo de pago">
    <img class="metodo-pago" src="/Imagenes/QR-YAPE.jpg" alt="QR de pago">
    <h4>+51 944 028 451</h4>
    <br>
    <form class="comprobante-form" action="guardar_boleta.php" method="post" enctype="multipart/form-data">
        <label for="comprobante_pago">Subir Comprobante de Pago:</label>
        <input type="file" name="comprobante_pago" id="comprobante_pago" required>
        <button type="submit">Enviar</button>
    </form>
    <a class="realizar-compra" href="realizar_compra.php">Realizar Compra</a>

</body>

</html>

<?php
include './includes/templates/footer.php';
?>