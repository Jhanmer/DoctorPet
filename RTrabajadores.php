
<?php
require ('includes/funciones.php');
incluirTemplate('header');

require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$consultaDist = "select * from dp_distrito;";
$ListaDist = mysqli_query($con, $consultaDist);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de trabajadores</title>
  <link rel="icon" type="image/png" href="Imagenes/LOGO.jpg">
  <link href="CSS/EstiloRTrabajadores.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
  
  <br><br>
  <h2>Registrar Trabajador</h2>
  <br>
  <form action="./Controlador/Ctrl_RTrabajadores.php" method="post">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br><br>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required><br><br>

    <label for="numero">Número de teléfono:</label>
    <input type="tel" id="numero" name="numero" required><br><br>

    <div class="input-field-RC-2">
      <i class="fa-solid fa-map-pin"></i>
      <div class="select-container">
        <label for="numero">Distrito:</label>
        <select name="district" class="select-box">
          <option value="">Selecciona un distrito</option>
          <?php while ($row = mysqli_fetch_assoc($ListaDist)) { ?>
            <option value="<?php echo $row["idDistrito"] ?>">
              <?php echo $row["Nombre"] ?>
            </option>
          <?php } ?>
        </select>
        <div class="icon-container">
          <i class="fa-solid fa-caret-down"></i>
        </div>
      </div>
    </div>

    <label for="cargo">Cargo:</label>
    <input type="text" id="cargo" name="cargo" required><br><br>

    <input type="submit" value="Registrar">
  </form>
  <br><br><br>


</body>
<?php 
    include './includes/templates/footer.php';

?>
</html>