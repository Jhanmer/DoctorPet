<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Imagenes/LOGO.jpg">
    <title>Doctor Pet - Registro de Cliente</title>
    <link href="CSS/EstiloRegistro_Mascotas.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/EstiloHContenedor.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
            <h2>PRODUCTOS</h2>
            <ul>
                <li><a href="CVestimenta.php"><i class="fas fa-qrcode"></i>Vestimenta</a></li>
                <li><a href="CMedicamentos.php"><i class="fas fa-qrcode"></i>Medicamentos</a></li>
                <li><a href="CAlimento.php"><i class="fas fa-qrcode"></i>Alimento</a></li>
                <li><a href="CAccesorios.php"><i class="fas fa-qrcode"></i>Accesorios</a></li>
            </ul>
        </div>
        <div class="logo">
            <a href="#"><img src="Imagenes/LOGO.jpg" alt="" /></a>
        </div>

        <div class="info-header">
            <nav>
                <a href="RegistroC.php">Registrate</a>
                <a href="#">Iniciar Sesion</a>
            </nav>
        </div>

    </header>
    
    <main>
            <div class="login-box">
                <h2>Registro Mascota</h2>
                <?php include 'Controlador/Ctrl_Registro_Mascota.php';?> 
                <form action="#" method="POST">
                  <div class="user-box">
                    <input type="text" name="nom_masc" required="">
                    <label>Nombre</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="edad_masc" required="">
                    <label>Edad</label>
                  </div>
                  <div class="user-box">
                        <select name="especie_masc" class="select-box">
                            <option value="">Seleccione especie de la mascota</option>
                            <?php while($row = mysqli_fetch_assoc($ListaEspecie)){ ?>
                                <option value="<?php echo $row["idEspecie"] ?>">
                                    <?php echo $row["nombreEspe"] ?>
                                </option>
                            <?php } ?>    
                        </select>
                  </div>
                    
                  <div class="user-box">
                        <select name="raza_masc" class="select-box">
                            <option value="">Seleccione raza de la mascota</option>
                            <?php while($row = mysqli_fetch_assoc($ListaRaza)){ ?>
                                <option value="<?php echo $row["idRaza"] ?>">
                                    <?php echo $row["nombreRaza"] ?>
                                </option>
                            <?php } ?>    
                        </select>
                  </div>  
                  
                  <div class="user-box">
                        <input type="radio" name="genero_masc" value="Hombre">
                        <p>Macho</p>
                        <input type="radio" name="genero_masc" value="Mujer">
                        <p>Hembra</p>
                  </div>
                    
                  <div class="user-box">
                    <input type="email" name="coreo_dueño" required="">
                    <label>Correo del dueño</label>
                  </div>
                                       
                  <div class="boton-box">
                      <input type="submit" name="enviar" value="Registrar" id="enviar">
                  </div>  
                </form>
            </div>
        </main>   

</body>
</html>