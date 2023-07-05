<?php
// Verificar si el parámetro "idConsultaPer" existe en la URL
if (isset($_GET['idConsultaPer'])) {
    $idConsultaPer = $_GET['idConsultaPer'];
?>
    <?php
    require('includes/funciones.php');
    incluirTemplate('header');
    $idCliente = isset($_SESSION["idCliente"]) ? $_SESSION["idCliente"] : "";
    $nombreUser = isset($_SESSION["nombre"]) ? $_SESSION["nombre"] : "";
    $apeUser = isset($_SESSION["apellidos"]) ? $_SESSION["apellidos"] : "";
    $tele = isset($_SESSION["Telefono"]) ? $_SESSION["Telefono"] : "";
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="containerpago">
        <div class="card-container">
            <div class="front">
                <div class="image">
                    <img src="Imagenes/chip.png" alt="">
                    <img src="Imagenes/visa.png" alt="">
                </div>
                <div class="card-number-box">DOCTORPET</div>
                <div class="flexbox">
                    <div class="box">
                        <span><?php echo $nombreUser; ?> <?php echo $apeUser; ?></span>
                    </div>
                    <div class="box">
                        <span hidden><?php echo $idConsultaPer ?></span>
                        <span>App | Monto</span>
                        <div class="expiration">
                            <span class="exp-month">App</span>
                            <span class="exp-year">S/. 55.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="back">
                <div class="stripe"></div>
                <div class="box">
                    <span>cvv</span>
                    <div class="cvv-box"></div>
                    <img src="Imagenes/visa.png" alt="">
                </div>
            </div>

        </div>

        <form action="/Controlador/RegistrarPago.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idCliente" value="<?php echo $idCliente; ?>">
            <input type="hidden" name="idConsultaPer" value="<?php echo $idConsultaPer; ?>">
            <div class="contador">
                <span id="minutos">02</span>:<span id="segundos">00</span>
                <h1 class="yape">Destino: <strong>944028451</strong> - Doctor Pet</h1>
            </div>
            <div class="inputBox">
                <span>Celular de Origen</span>
                <input type="text" maxlength="9" name="txtcelular" value="<?php echo $tele; ?>" readonly>
            </div>
            <div class="inputBox">
                <span>Celular Alternativo de Origen para realizar el pago</span>
                <input type="text" maxlength="9" class="card-number-input" name="txtcelularAl">
            </div>
            <div class="flexbox">
                <div class="inputBox">
                    <span>Ingrese su DNI:</span>
                    <input type="text" class="card-holder-input" id="documento" name="txtdni" required="" />
                </div>
                <div class="inputBox">

                    <button type="button" id="buscar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flexbox">
                <div class="inputBox">
                    <input type="text" class="card-holder-name" id="apellidoP" disabled>
                </div>
                <div class="inputBox">
                    <input type="text" class="card-holder-name" id="apellidoM" disabled>
                </div>
                <div class="inputBox">
                    <input type="text" class="card-holder-name" id="nombre" disabled>
                </div>
            </div>

            <div class="flexbox">
                <div class="inputBox">
                    <span>Ingrese evidencia:</span>
                    <input type="file" class="card-holder-input" required="" name="txtevidencia" />
                </div>
                <div class="inputBox">
                </div>
            </div>

            <div class="flexbox">
                <div class="inputBox">
                    <span>Cartera de App</span>
                    <select name="txtaplicacion" id="" class="month-input" required="">
                        <option value="month" selected disabled>Cartera</option>
                        <option value="Yape">Yape</option>
                        <option value="Plin">Plin</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Monto</span>
                    <input type="text" class="card-holder-name" id="" name="txtmonto" value="55.00" readonly>
                </div>
            </div>
            <input type="submit" value="Validar" class="submit-btn">
        </form>
    </div>
    <script>
        document.querySelector('.card-number-input').oninput = () => {
            document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
        }
        document.querySelector('.card-holder-input').oninput = () => {
            document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
        }
        document.querySelector('.month-input').oninput = () => {
            document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
        }
        document.querySelector('.year-input').oninput = () => {
            document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
        }
        document.querySelector('.cvv-input').onmouseenter = () => {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
        }
        document.querySelector('.cvv-input').onmouseleave = () => {
            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
        }
        document.querySelector('.cvv-input').oninput = () => {
            document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#buscar').click(function() {
                var dni = $('#documento').val();
                if (dni !== '') {
                    // Construir la URL de la API con el número de DNI y el token
                    var url = "https://dniruc.apisperu.com/api/v1/dni/" + dni + "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InhlaGFqNDAyNjVAZGV2c3dwLmNvbSJ9.BAZQ4rrkJbkcRX9rSSjR0zgeWdaozMLhLh3QfuWECFA";

                    // Realizar la solicitud GET a la API
                    $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            if (data.dni) {
                                // Mostrar la información obtenida
                                $('#apellidoP').val(data.apellidoPaterno);
                                $('#apellidoM').val(data.apellidoMaterno);
                                $('#nombre').val(data.nombres);
                            } else {
                                $('#apellidoP').val('');
                                $('#apellidoM').val('');
                                $('#nombre').val('');
                                alert('No se encontró información para el DNI ' + dni + '.');
                            }
                        },
                        error: function() {
                            $('#apellidoP').val('');
                            $('#apellidoM').val('');
                            $('#nombre').val('');
                            alert('Error al consultar la información del DNI.');
                        }
                    });
                } else {
                    alert('Ingrese un número de DNI.');
                }
            });
        });
    </script>

    <script>
        // Obtener elementos del DOM
        var minutosElement = document.getElementById('minutos');
        var segundosElement = document.getElementById('segundos');
        // Configuración inicial del contador
        var tiempoTotal = 2 * 60; // 4 minutos en segundos
        var tiempoRestante = tiempoTotal;
        // Función para actualizar el contador
        function actualizarContador() {
            var minutos = Math.floor(tiempoRestante / 60);
            var segundos = tiempoRestante % 60;
            // Añadir un 0 al principio si los minutos o segundos son menores a 10
            minutos = minutos < 10 ? '0' + minutos : minutos;
            segundos = segundos < 10 ? '0' + segundos : segundos;
            // Actualizar los elementos del DOM con los nuevos valores
            minutosElement.textContent = minutos;
            segundosElement.textContent = segundos;
            // Detener el contador cuando llegue a cero
            if (tiempoRestante === 0) {
                clearInterval(intervalo);
                // Aquí puedes realizar alguna acción cuando el contador llegue a cero
                window.location.href = 'ListaReseva.php';
            } else {
                tiempoRestante--; // Disminuir el tiempo restante en 1 segundo
            }
        }
        // Llamar a la función de actualización cada segundo
        var intervalo = setInterval(actualizarContador, 1000);
    </script>
<?php
} else {
    // El parámetro "idConsultaPer" no está presente en la URL
    // Realiza alguna acción de manejo de errores o redirecciona a otra página
}
?>
<?php
include './includes/templates/footer.php';
?>