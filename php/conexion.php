<?php
    $usuario="root";
    $contraseña="";
    $bd="pruebadesa_erick_turriago";
    try{
        $base_de_datos= mysqli_connect("localhost","$usuario","$contraseña","$bd");
    }catch(Exception$e){
        print_r($e);
    }
    $base_de_datos->set_charset('utf8');
?>