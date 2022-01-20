<?php
    require_once("../php/conexion.php");
    $primerNombre = $_POST["primerNombre"];
    $segundoNombre = $_POST["segundoNombre"];
    $primerApellido = $_POST["primerApellido"];
    $segundoApellido = $_POST["segundoApellido"];
    $tipodocumento = $_POST["tipodocumento"];
    $numerodocumento = $_POST["numerodocumento"];
    $departamento = $_POST["departamento1"];
    $municipio = $_POST["municipio1"];
    $tipoTercero = $_POST["tipoTercero1"];

    $sentencia = ("SELECT numeroidentificacion FROM tercero WHERE numeroidentificacion=$numerodocumento;");
    $tercero=$base_de_datos->query($sentencia);

    if ($tercero->num_rows>0){
        echo "<script>alert('La cedula ingresada ya existe'); window.location='../index.php'</script>";
    } else{
        $insertarSQL = "INSERT INTO tercero(tipoidentificacion,numeroidentificacion,tipotercero,nombre1,nombre2,
        apellido1,apellido2,iddepartamento,idmunicipio) VALUES('$tipodocumento',$numerodocumento,'$tipoTercero','$primerNombre','$segundoNombre','$primerApellido',
        '$segundoApellido','$departamento','$municipio');";

        $resultado = mysqli_query($base_de_datos,$insertarSQL);
        if($resultado){
            echo "<script>alert('Usuario agregado correctamente'); window.location='../index.php'</script>";
        }
        else{
            printf("error message: %s\n", mysqli_error($conexion));
        }
    }
?>