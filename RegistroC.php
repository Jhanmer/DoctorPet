<?php 
    require 'Config/conexion_bd.php';
    $consultaDist = "select * from dp_distrito;";
    $ListaDist = mysqli_query($conn,$consultaDist);
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
    <title>Doctor Pet</title>
    <link href="CSS/EstiloRegistroCliente.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body>
        
            <div class="container-RC">
            <div class="form-content-RC">
                <h1 id="title">Registro</h1>
                <form action="#" method="POST">
                <?php include 'Controlador/Controlador_registrar_usuario.php'; ?>
                    <div class="input-group-RC">
                        <div class="input-field-RC">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="nombres" placeholder="Nombres">
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="apellidos" placeholder="Apellidos">
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-cake-candles"></i>
                            <input type="date" min="1900-01-01" name="fecha_nacimiento">
                        </div>
                        <div class="input-field-RC-3">
                            <i class="fa-solid fa-venus-mars"></i>
                            <input type="radio" name="gender" value="Hombre"><p>Hombre</p>
                            <input type="radio" name="gender" value="Mujer"><p>Mujer</p>
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" name="direccion" placeholder="Dirección">
                        </div>
                        <div class="input-field-RC-2">
                            <i class="fa-solid fa-map-pin"></i>
                            <div class="select-container">
                            <select name="district"class="select-box">
                                <option value="">Selecciona un distrito</option>
                                <?php while ($row = mysqli_fetch_assoc($ListaDist)) { ?>
                                    <option value="<?php echo $row["idDistrito"]?>">
                                      <?php echo $row["Nombre"]?>  
                                    </option>                        
                                <?php } ?>
                            </select>
                                <div class="icon-container">
                                <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                         <div class="input-field-RC">
                            <i class="fa-solid fa-phone"></i>
                            <input type="text" name="telefono" placeholder="Teléfono">
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="correo" placeholder="Correo">
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="contraseña" placeholder="Contraseña">
                        </div>
                        <p>Olvidaste tu contraseña <a href="#">click aquí</a></p>
                    </div>
                    <div class="btn-field-RC">
                        <input type="submit" name="registro" value="Registrarse">
                        <button type="button"><a href="#">Login</a></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>