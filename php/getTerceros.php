<?php
    require_once('php/conexion.php');
    $sentencia = ("SELECT tercero.id,departamento.nombdepa, municipio.nombmuni,tipoidentificacion,numeroidentificacion,nombre1, nombre2,apellido1,apellido2,tipotercero.nombtipo FROM tercero
    JOIN departamento ON tercero.iddepartamento = departamento.id
    JOIN municipio ON tercero.idmunicipio = municipio.id
    JOIN tipotercero ON tercero.tipotercero = tipotercero.id;");
    $terceros=$base_de_datos->query($sentencia);
?>