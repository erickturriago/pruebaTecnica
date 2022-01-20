<?php
    require_once('../php/conexion.php');
	$id_departamento = $_POST['id'];
    $query = "SELECT id, nombmuni FROM municipio WHERE iddepa = '$id_departamento' ORDER BY nombmuni";
    $resultado = $base_de_datos->query($query);
    $listas = '<option selected>Seleccione su municipio</option>';
    while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
        $listas .= "<option value='$row[id]''> $row[nombmuni]</option>";
    }
    echo $listas;

?>
