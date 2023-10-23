<?php
    include_once('conexion.php');

    $id = $_POST['id'];
    $cedula = $_POST['cedula'];
    $numbot = $_POST['numbotellas'];
    
    if($numbot != "") {
        $query = "UPDATE botellones_llenados SET clientes_cedula='$cedula', numbotellones='$numbot' WHERE idllenados='$id'";
        
        $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec)); //recordset ($rs)

        if($rs){
            echo "<script>alert('Registro Modificado');</script>";
        }else{
            echo "<script>alert('Error: No se modificó el registro');</script>";
        }
    } else {
        echo "<script>alert('Debe ingresar la cantidad de botellones');</script>";
    }

  

?>