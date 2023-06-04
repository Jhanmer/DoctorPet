<?php

if(!empty($_POST['registro'])){
    if(empty($_POST['nombres'])){echo '<div class="alerta">El campo de NOMBRES está vacío</div>';}
    if(empty($_POST['apellidos'])){echo '<div class="alerta">El campo de APELLIDOS está vacío</div>'; }
    if(empty($_POST['fecha_nacimiento'])){echo '<div class="alerta">El campo de FECHA NACIMIENTO está vacío</div>';}
    if(empty($_POST['gender'])){echo '<div class="alerta">El campo de GÉNERO está vacío</div>';}
    if(empty($_POST['direccion'])){echo '<div class="alerta">El campo de DIRECCIÓN está vacío</div>';} 
    if(empty($_POST['district'])){echo '<div class="alerta">El campo de DISTRITO está vacío</div>';}
    if(empty($_POST['telefono'])){echo '<div class="alerta">El campo de TELÉFONO está vacío</div>';}
    if(empty($_POST['correo'])){echo '<div class="alerta">El campo de CORREO está vacío</div>';}
    if(empty($_POST['contraseña'])){echo '<div class="alerta">El campo de CONTRASEÑA está vacío</div>';
    }else{
        $nombre=$_POST['nombres'];
        $apellido=$_POST['apellidos'];
        $contraseña=$_POST['contraseña'];
        $fecha_nacimiento=$_POST['fecha_nacimiento'];   
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
        }else{
            $gender ="";
        }
        $direccion=$_POST['direccion'];
        $district=$_POST['district'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        
        $sql=$con->query("insert into dp_cliente(nombre,apellidos,Email,Fecha_nacimiento,Genero,direccion,IdDistrito,Telefono,Password)
                values('$nombre','$apellido','$correo','$fecha_nacimiento','$gender','$direccion','$district','$telefono','$contraseña')");
        if($sql==1){
            echo '
            <html lang="en" class=" -webkit-"><head>
                <meta charset="UTF-8">
                    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
                    <meta name="apple-mobile-web-app-title" content="CodePen">
                    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
                    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">
                <title>CodePen - Success Message</title>
                    <link rel="canonical" href="https://codepen.io/tmmmm/pen/eJvdyy">       
                <style media="" data-href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0} menu,article,aside,details,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{}button,select{text-transform:none}[type=submit], [type=reset],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}/*# sourceMappingURL=normalize.min.css.map */</style>
                <style>
                    .success-message {
                    text-align: center;
                    max-width: 500px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(300%, 200%);
                    }

                    .success-message__icon {
                    max-width: 75px;
                    }

                    .success-message__title {
                    color: #00b27f;
                    transform: translateY(25px);
                    opacity: 0;
                    transition: all 200ms ease;
                    }
                    .active .success-message__title {
                    transform: translateY(0);
                    opacity: 1;
                    }

                    .success-message__content {
                    color: #ababab;
                    transform: translateY(25px);
                    opacity: 0;
                    transition: all 200ms ease;
                    transition-delay: 50ms;
                    }
                    .active .success-message__content {
                    transform: translateY(0);
                    opacity: 1;
                    }

                    .icon-checkmark circle {
                    fill: #00b27f;
                    transform-origin: 50% 50%;
                    transform: scale(0);
                    transition: transform 200ms cubic-bezier(0.22, 0.96, 0.38, 0.98);
                    }
                    .icon-checkmark path {
                    transition: stroke-dashoffset 350ms ease;
                    transition-delay: 100ms;
                    }
                    .active .icon-checkmark circle {
                    transform: scale(1);
                    }
                </style>
                <script>
                window.console = window.console || function(t) {};
                </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
                </head>

                <body translate="no" class="active">
                <div class="success-message">
                    <svg viewBox="0 0 76 76" class="success-message__icon icon-checkmark">
                        <circle cx="38" cy="38" r="36"></circle>
                        <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.7,40.9l10.9,10.9l28.7-28.7" style="stroke-dashoffset: 0; stroke-dasharray: 56.0029;"></path>
                    </svg>
                    <h1 class="success-message__title">Registro Completado</h1>
                    <div class="success-message__content">
                        <p>Ahora puedes iniciar sessión.</p>
                    </div>
                </div>
                    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
                    <script>
                    function PathLoader(el) {
                        this.el = el;
                        this.strokeLength = el.getTotalLength();
                        
                        // set dash offset to 0
                        this.el.style.strokeDasharray =
                        this.el.style.strokeDashoffset = this.strokeLength;
                    }
                    
                    PathLoader.prototype._draw = function (val) {
                        this.el.style.strokeDashoffset = this.strokeLength * (1 - val);
                    }
                    
                    PathLoader.prototype.setProgress = function (val, cb) {
                        this._draw(val);
                        if(cb && typeof cb === "function") cb();
                    }
                    
                    PathLoader.prototype.setProgressFn = function (fn) {
                        if(typeof fn === "function") fn(this);
                    }
                    
                    var body = document.body,
                        svg = document.querySelector("svg path");
                    
                    if(svg !== null) {
                        svg = new PathLoader(svg);
                        
                        setTimeout(function () {
                            document.body.classList.add("active");
                            svg.setProgress(1);
                        }, 200);
                    }                  
                    document.addEventListener("click", function () {
                        
                        if(document.body.classList.contains("active")) {
                            document.body.classList.remove("active");
                            svg.setProgress(0);
                            return;
                        }
                        document.body.classList.add("active");
                        svg.setProgress(1);
                    });
                    </script>
                </body>
            </html>
            ';
        }else{
            echo '<div class="alerta">¡¡¡ERROR AL MOMENTO DE REGISTRAR!!!</div>';
        }    
        }
    }
?>