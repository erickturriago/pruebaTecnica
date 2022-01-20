<?php
    require_once("conexion.php");
    $cedula = $_POST["numerodocumentoborrar"];


    $sentencia = ("SELECT numeroidentificacion FROM tercero WHERE numeroidentificacion=$cedula;");
    $tercero=$base_de_datos->query($sentencia);

    if($tercero ->num_rows>0){
        $deleteSQL = "DELETE FROM tercero WHERE numeroidentificacion=$cedula;";
        $resultado = mysqli_query($base_de_datos,$deleteSQL);
        echo "<script>alert('Tercero borrado correctamente'); window.location='../index.php'</script>";
        
    }
    else{
        echo "<script>alert('Tercero no existe'); window.location='../index.php'</script>";
    }

    

    


    
?>