<div class="fondo-color">
    <br>
    <div class="form-format rounded shadow-sm bg-white">
        <h3><b>Nuevo Cliente</b></h3><br>
        <input  name="txtCI" id="idCI" class="form-control" type="text" placeholder="Cédula de Identidad" aria-label="default input example" required><br>
        
        <input  name="txtName" id="idName" class="form-control" type="text" placeholder="Nombre y Apellido" aria-label="default input example" required><br>

        <select name="txtZona" id="idZona" class="form-select" aria-label="Default select example">
            <option value="Norte">Zona Norte</option>
            <option value="Sur">Zona Sur</option>
            <option value="Este">Zona Este</option>
            <option value="Oeste">Zona Oeste</option>
        </select><br>

        <div class="d-grid gap-2">
            <input type="submit" value="Registrar" id="btnClientes" name="btnClientes" onclick="insertaCliente();" class="btn btn-danger btn-lg">
        </div>
    </div>
    <br><br>
</div>