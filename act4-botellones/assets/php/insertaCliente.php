<?php
    include_once('conexion.php');

    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $zona = $_POST['zona'];
    if(is_numeric($cedula)){
        // Validamos que no exista ya un cliente con la misma cedula
        $queryCheck = "SELECT * FROM botellones_clientes WHERE cedula= '$cedula'";
        $rsCheck = mysqli_query($conec, $queryCheck) or die('Error: ' . mysqli_error($conec)); 
        $num_rows = mysqli_num_rows($rsCheck);

        if ($num_rows == 0) {

            $query = "INSERT INTO botellones_clientes(cedula, nombre, zonapais, estado) VALUES('$cedula', '$nombre', '$zona', 'SI')";

            $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec)); //recordset ($rs)

            if($rs){
                echo "<script>alert('Registro Agregado');</script>";
            }else{
                echo "<script>alert('Error: No se agrego el registro');</script>";
            }
        } else {
            echo "<script>alert('Ya existe un cliente con esta cédula');</script>";
        }
    } else {
        echo "<script>alert('El campo de cédula solo puede tener números');</script>";
    }
?>