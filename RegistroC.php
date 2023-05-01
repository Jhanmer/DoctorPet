<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Imagenes/IProductos/Inicio/LOGO.jpg">
    <title>Doctor Pet</title>
    <link href="CSS/EstiloBFila.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="CSS/EstiloC.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloBLateral.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloBotonSearch.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloHContenedor.css" rel="stylesheet" type="text/css" />
    <link href="CSS/EstiloPiePagina.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link href="CSS/EstiloRegistroClientes.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
            <div class="container-RC">
            <div class="form-content-RC">
                <h1 id="title">Registro</h1>
                <form>
                    <div class="input-group-RC">
                        <div class="input-field-RC">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Nombres">
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Apellidos">
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-cake-candles"></i>
                            <input type="date" min="1900-01-01">
                        </div>
                        <div class="input-field-RC-3">
                            <i class="fa-solid fa-venus-mars"></i>
                            <input type="radio" name="gender" value="Hombre"><p>Hombre</p>
                            <input type="radio" name="gender" value="Muejr"><p>Mujer</p>
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-location-dot"></i>
                            <input type="text" placeholder="Dirección">
                        </div>
                        <div class="input-field-RC-2">
                            <i class="fa-solid fa-map-pin"></i>
                            <div class="select-container">
                            <select class="select-box">
                                <option value="nada">Selecciona un distrito</option>
                                <option value="1">Chorrillos</option>
                                <option value="2">Pachacamac</option>
                                <option value="3">Pucusana</option>
                                <option value="4">San Juan de Miraflores</option>
                                <option value="5">San Bartolo</option>
                                <option value="6">Punta Hermosa</option>
                                <option value="7">Punta Negra</option>
                                <option value="8">Lurín</option>
                                <option value="9">Santa María del Mar</option>
                                <option value="10">Villa El Salvador</option>
                                <option value="10">Villa María del Triunfo</option>
                            </select>
                                <div class="icon-container">
                                <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                         <div class="input-field-RC">
                            <i class="fa-solid fa-phone"></i>
                            <input type="text" placeholder="Teléfono">
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Correo">
                        </div>
                        <div class="input-field-RC">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Contraseña">
                        </div>
                        <p>Olvidaste tu contraseña <a href="#">click aquí</a></p>
                    </div>
                    <div class="btn-field-RC">
                        <button id="signUp" type="button" onclick="alert('¡Gracias por registrarte!')">Registrarse</button>
                        <button id="signIn" type="button"><a href="#">Login</a></button>
                    </div>
                </form>
            </div>
        </div>

</body>

</html>