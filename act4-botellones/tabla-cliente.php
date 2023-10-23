<?php
    // Base de datos
    include_once('assets/php/conexion.php');

    $query = "SELECT * FROM botellones_clientes WHERE estado='SI'";
    $rs    = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec));

?>
<div id="tabla" class="fondo-color">
    <br>
    <div class="rounded shadow-sm bg-white table-format">
        <h3><b>Registro de Clientes</b></h3>
        <div class="table-responsive">
            <table class="table table-sm table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Cédula</th>
                        <th>Nombre y Apellido</th>
                        <th>Zona del país</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila = mysqli_fetch_array($rs)){  ?>
                        <tr>
                            <td><?php $ced = $fila['cedula']; echo $ced; ?></td>
                            <td><?php $name = $fila['nombre']; echo $name;?></td>
                            <td><?php $zona = $fila['zonapais']; echo $zona;?></td>
                            <td>
                                <a onclick='abreModCliente("<?php echo $ced?>", "<?php echo $name?>", "<?php echo $zona?>");'><i class="material-icons">edit</i></a>
                                <a onclick='eliminaCliente("<?php echo $ced?>");'><i class="material-icons">delete_forever</i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a href="assets/php/clientesPDF.php" ><i class="material-icons">picture_as_pdf</i><b>Registro de Clientes.pdf</b></a>
    </div>
    <br><br>
</div>