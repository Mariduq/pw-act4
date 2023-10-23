<?php
    // Base de datos
    include_once('assets/php/conexion.php');

    $query = "SELECT * FROM botellones_llenados WHERE estado='SI'";
    $rs    = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec));

?>

<div id="tabla" class="fondo-color">
    <br>
    <div class="rounded shadow-sm bg-white table-format">
        <h3><b>Registro de Llenado</b></h3>
        <div class="table-responsive">
            <table class="table table-sm table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha y Hora</th>
                        <th>No. Botellones</th>
                        <th>Cédula del cliente</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($fila = mysqli_fetch_array($rs)){  ?>
                        <tr>
                            <td><?php $id = $fila['idllenados']; echo $id; ?></td>
                            <td><?php $fecha = $fila['fechahora']; echo $fecha;?></td>
                            <td><?php $numb = $fila['numbotellones']; echo $numb;?></td>
                            <td><?php $cedula = $fila['clientes_cedula']; echo $cedula;?></td>
                            <td>
                                <a onclick='abreModLlenado("<?php echo $id?>", "<?php echo $cedula?>", "<?php echo $numb?>");'><i class="material-icons">edit</i></a>
                                <a onclick='eliminaLlenado("<?php echo $id?>");'><i class="material-icons">delete_forever</i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a href="assets/php/llenadosPDF.php"><i class="material-icons">picture_as_pdf</i><b>Registro de Llenado.pdf</b></a>
    </div>
    <br><br>
</div>