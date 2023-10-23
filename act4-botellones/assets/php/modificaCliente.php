<?php
    include_once('conexion.php');

    $cedulaVieja = $_POST['vieja'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $zona = $_POST['zona'];
    
    if($cedulaVieja != $cedula) {

        if(is_numeric($cedula)){
            // Validamos que no exista ya un cliente con la misma cedula
            $queryCheck = "SELECT * FROM botellones_clientes WHERE cedula= '$cedula'";
            $rsCheck = mysqli_query($conec, $queryCheck) or die('Error: ' . mysqli_error($conec)); 
            $num_rows = mysqli_num_rows($rsCheck);

            if ($num_rows == 0) {
                $query = "UPDATE botellones_clientes SET cedula='$cedula', nombre='$nombre', zonapais='$zona' WHERE cedula='$cedulaVieja'";
                
                $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec)); //recordset ($rs)

                if($rs){
                    echo "<script>alert('Registro Modificado');</script>";
                }else{
                    echo "<script>alert('Error: No se modificó el registro');</script>";
                }  
            } else {
                echo "<script>alert('Ya existe un cliente con esta cédula');</script>";
            }
        } else {
            echo "<script>alert('El campo de cédula solo puede tener números');</script>";
        }

    } else {
        $query = "UPDATE botellones_clientes SET cedula='$cedula', nombre='$nombre', zonapais='$zona' WHERE cedula='$cedulaVieja'";
            
        $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec)); //recordset ($rs)

        if($rs){
            echo "<script>alert('Registro Modificado');</script>";
        }else{
            echo "<script>alert('Error: No se modificó el registro');</script>";
        }
    }


?>