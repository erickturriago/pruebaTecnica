<?php

    require_once('../php/conexion.php');
    $query = 'SELECT * FROM `tipotercero`';
    $resultado = $base_de_datos->query($query);
    $listas = '<option selected>Seleccione el tipo de tercero</option>';
    while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
        $listas .= "<option value='$row[id]''> $row[nombtipo]</option>";
    }
    echo $listas;

?>