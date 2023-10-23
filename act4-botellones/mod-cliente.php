<div class="fondo-color">
    <br>
    <div class="form-format rounded shadow-sm bg-white">
        <!-- el php inserta los datos del cliente en el formulario -->
        <h3><b>Modificar Datos del Cliente</b></h3><br>

        <!-- Guardamos la cedula vieja en caso de que se quiera actualizar -->
        <?php $cedVieja = $_POST['cedula']; ?>
        
        <input  name="txtCI" id="idCI" value="<?php echo $_POST['cedula']; ?>" class="form-control" type="text" placeholder="Cédula de Identidad" aria-label="default input example" required><br>
        
        <input  name="txtName" id="idName" value="<?php echo $_POST['nombre']; ?>" class="form-control" type="text" placeholder="Nombre y Apellido" aria-label="default input example" required><br>

        <select name="txtZona" id="idZona" class="form-select" aria-label="Default select example">
            <option value="Norte"<?php if($_POST["zona"] == "Norte"): ?> selected <?php endif; ?>>Zona Norte</option>
            <option value="Sur"<?php if($_POST["zona"] == "Sur"): ?> selected <?php endif; ?>>Zona Sur</option>
            <option value="Este"<?php if($_POST["zona"] == "Este"): ?> selected <?php endif; ?>>Zona Este</option>
            <option value="Oeste"<?php if($_POST["zona"] == "Oeste"): ?> selected <?php endif; ?>>Zona Oeste</option>
        </select><br>

        <div class="d-grid gap-2">
            <input type="submit" value="Modificar" onclick='modificaCliente("<?php echo $cedVieja?>");' name="btnClientes" class="btn btn-danger btn-lg">
        </div>

    </div>
    <br><br>
</div>