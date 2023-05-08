<?php
$server="localhost";
$username="root";
$password="";
$database="bddoctorpet";

    try{
        $conn = mysqli_connect($server,$username,$password,$database);
    }catch(PDOException $e){
        die('Connected failed: '.$e->getMessage());
    }
    $conn->set_charset("utf8");
?>

