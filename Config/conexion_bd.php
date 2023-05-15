<?php
function fnConnect(&$msg){
    $con = mysqli_connect('localhost','root','');
    if(!$con){
        $msg = 'ERROR en la conexion';
        return false;
    }
    $rpta = mysqli_select_db($con, 'bddoctorpet'); //nombre bd
    if(!$rpta){
        $msg = 'Base de datos no existe!!!';
        mysqli_close($con);
        return false;
    }
    return $con;
}
function say($cad){
    echo $cad;
}
//funcion que recibe un titulo y un mensaje muestra en tabla
?>

