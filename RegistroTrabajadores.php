<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>
<form action="Controlador/Ctrl_RTrabajadores.php" method="post">
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
<?php 
    include './includes/templates/footer.php';

?>