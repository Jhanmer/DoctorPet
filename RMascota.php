<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
    <title>Doctor Pet - Registro de Cliente</title>
    <link href="CSS/EstiloRegistroCliente.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="CSS/EstiloRMascota.css" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="CSS/EstiloBLateral.css" rel="stylesheet" type="text/css"/>
    <link href="CSS/EstiloBotonSearch.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloHContenedor.css" rel="stylesheet" type="text/css" />

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

        <div class="Busqueda">
            <input type="text" placeholder="Buscar">
            <div class="btn">
                <i class="fa fa-search"></i>
            </div>
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
                <form>
                  <div class="user-box">
                    <input type="text" name="nom_masc" required="">
                    <label>Nombre</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="sexo" required="">
                    <label>sexo</label>
                  </div>  
                   <div class="user-box">
                    <input type="text" name="edad" required="">
                    <label>edad</label>
                  </div> 
                  <div class="user-box">
                    <input type="password" name="raza" required="">
                    <label>raza</label>
                  </div>
                  <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Registrar
                  </a>
                </form>
            </div>
        </main>   
    
</body>
</html>