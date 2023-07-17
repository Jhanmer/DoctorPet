<?php
require 'app.php';

function incluirTemplate($nombre)
{
    include TEMPLATES_URL . "/$nombre.php";
}
?>

<?php
function conectarDB2()
{
    $dbHost = 'localhost'; // Puede ser 'localhost' si estás usando XAMPP o WAMP
    $dbUsuario = 'root';
    $dbPassword = '';
    $dbName = 'bddoctorpet';
	    // Crear una conexión
    $db = mysqli_connect($dbHost, $dbUsuario, $dbPassword, $dbName);

    // Verificar si la conexión fue exitosa
    if (!$db) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit; // Finalizar el script si no hay conexión
    }

    return $db;
}
?>