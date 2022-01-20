<?php

    require_once('../php/conexion.php');
    $query = 'SELECT * FROM `departamento`';
    $resultado = $base_de_datos->query($query);
    $listas = '<option selected>Seleccione su departamento</option>';
    while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
        $listas .= "<option value='$row[id]''> $row[nombdepa]</option>";
    }
    echo $listas;
?>