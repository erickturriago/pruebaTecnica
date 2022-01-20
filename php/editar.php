<?php
    require_once("conexion.php");
    $id = $_POST["id"];
    $primerNombre = $_POST["primerNombre"];
    $segundoNombre = $_POST["segundoNombre"];
    $primerApellido = $_POST["primerApellido"];
    $segundoApellido = $_POST["segundoApellido"];
    $tipodocumento = $_POST["tipodocumento"];
    $numerodocumento = $_POST["numerodocumento"];
    $departamento = $_POST["departamento2"];
    $municipio = $_POST["municipio2"];
    $tipoTercero = $_POST["tipoTercero2"];


    $updateSQL = "UPDATE tercero SET tipoidentificacion='$tipodocumento', numeroidentificacion=$numerodocumento, tipotercero='$tipoTercero',
    nombre1='$primerNombre', nombre2='$segundoNombre', apellido1='$primerApellido',
    apellido2='$segundoApellido', iddepartamento='$departamento',idmunicipio='$municipio' WHERE id = $id;";

    $resultado = mysqli_query($base_de_datos,$updateSQL);
    if($resultado){
        echo "<script>alert('Usuario editado correctamente'); window.location='../index.php'</script>";
    }
    else{
        printf("error message: %s\n", mysqli_error($conexion));
    }
?>