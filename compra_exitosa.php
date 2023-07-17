<?php
require('includes/funciones.php');
incluirTemplate('header');

if (!isset($_SESSION["idCliente"])) {
    header("Location: login.php");
    exit();
}

$db = conectarDB2();

$idCliente = $_SESSION["idCliente"];

// Obtener los datos del cliente
$queryCliente = "SELECT * FROM dp_cliente WHERE idCliente = $idCliente";
$resultadoCliente = mysqli_query($db, $queryCliente);
$cliente = mysqli_fetch_assoc($resultadoCliente);

// Obtener la información de la boleta
$queryBoleta = "SELECT * FROM boleta WHERE idCliente = $idCliente ORDER BY idBoleta DESC LIMIT 1";
$resultadoBoleta = mysqli_query($db, $queryBoleta);
$boleta = mysqli_fetch_assoc($resultadoBoleta);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Compra Exitosa</title>
    <style>
        .boleta-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .boleta-title {
            font-family: "Courier New", Courier, monospace;
            text-align: center;
            color: #239B56;
            margin-bottom: 10px;
        }

        .boleta-info {
            font-family: "Courier New", Courier, monospace;
            font-size: 14px;
            color: #000;
            margin-bottom: 10px;
            border-bottom: 1px dashed #999;
            padding-bottom: 5px;
        }

        .boleta-comprobante {
            text-align: center;
        }

        .boleta-comprobante img {
            max-width: 180px;
            border: 2px solid #ffde59;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        .boleta-comprobante img:hover {
            transform: scale(1.9);
        }

        .boleta-button {
            background-color: #239B56;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto;
            text-align: center;
        }

        .boleta-button:hover {
            background-color: #17202A;
        }
    </style>
</head>

<body>
    <br>
    <div class="boleta-container">
        <h2 class="boleta-title">¡Gracias por tu compra!</h2>
        <p class="boleta-info">Estimado(a) <?php echo $cliente['nombre'] . ' ' . $cliente['apellidos']; ?></p>
        <p class="boleta-info">A continuación, te proporcionamos los detalles de tu compra:</p>

        <?php if ($boleta) : ?>
            <p class="boleta-info">Número de boleta: <?php echo $boleta['codigoUnico']; ?></p>
            <p class="boleta-info">Fecha de compra: <?php echo $boleta['fecha']; ?></p>
            <p class="boleta-info">Productos comprados: <?php echo $boleta['productos']; ?></p>
            <p class="boleta-info">Monto total: S/. <?php echo $boleta['montoTotal']; ?></p>

            <div class="boleta-comprobante">
                <p>Comprobante de Pago:</p>
                <?php
                // Obtener la imagen de la base de datos (longblob)
                $imagenBlob = $boleta['imagen'];

                // Convertir la imagen (longblob) a formato base64
                $imagenBase64 = base64_encode($imagenBlob);

                // Mostrar la imagen como dato URI en la etiqueta de imagen
                echo '<img src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Comprobante de Pago">';
                ?>
            </div>

<br>

            <p class="boleta-info">Imprime tu boleta, pasa por nuestra veterinaria y lleva tus productos a casa.</p>

            <!-- Botón para imprimir la boleta -->
            <button class="boleta-button" onclick="window.print()">Imprimir Boleta</button>
        <?php else : ?>
            <p class="boleta-info">No se encontró información de la boleta.</p>
        <?php endif; ?>
    </div>
</body>

</html>

<!-- Jquery JS-->
<script src="estilos/vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="estilos/vendor/select2/select2.min.js"></script>
<script src="estilos/vendor/datepicker/moment.min.js"></script>
<script src="estilos/vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="estilos/js/global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>