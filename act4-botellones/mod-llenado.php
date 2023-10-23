<div class="fondo-color">
    <br>
    <div class="form-format rounded shadow-sm bg-white">
        <h3><b>Modificar Datos de la Operación</b></h3><br>

        <div class="d-grid gap-2">
            <input type="submit" onclick="abreSelectClienteMOD('<?php echo $_POST['id']?>', '<?php echo $_POST['numbot']?>');" value="Seleccionar Cliente" name="btnSelectCliente" class="btn btn-danger btn-lg">
        </div><br>

        <?php if(isset($_POST['cedula'])) {?>
        <h5>Cédula: <?php echo $_POST['cedula']?></h5><br>

        <input  value="<?php echo $_POST['numbot']?>" name="txtBotellones" id="idBotellones" class="form-control" type="number" min="1" max="200" onpaste = "return false;" placeholder="Cantidad de botellones llenados" aria-label="default input example" required><br>

        <div class="d-grid gap-2">
            <input type="submit" onclick="modificaLlenado('<?php echo $_POST['id']?>','<?php echo $_POST['cedula']?>');" value="Modificar" name="btnLlenado" class="btn btn-danger btn-lg">
        </div>

        <?php } ?>

    </div>
    <div id="selectCliente"></div>
    <br><br>
</div>