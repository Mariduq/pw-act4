<?php
    include_once('conexion.php');

    $cedula = $_POST['cedula'];
    $numbot = $_POST['numbotellas'];

    if($numbot != "") {
        $query = "INSERT INTO botellones_llenados(fechahora, numbotellones, estado, clientes_cedula) VALUES(NOW(), '$numbot', 'SI', '$cedula')";

        $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec)); //recordset ($rs)

        if($rs){
            echo "<script>alert('Registro Agregado');</script>";
        }else{
            echo "<script>alert('Error: No se agrego el registro');</script>";
        }
    } else {
        echo "<script>alert('Debe ingresar la cantidad de botellones');</script>";
    }




?>