<?php

function conectarDB() :mysqli  {
    $db = mysqli_connect('localhost', 'root', '', 'bddoctorpet');
    if(!$db){
        echo 'No Se conecto';
        exit;
    }   

    return $db;

}