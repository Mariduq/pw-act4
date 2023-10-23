// Funciones de Clientes
function abreNuevoCliente() {
    $.ajax({
        url: 'nuevo-cliente.php',
        type: 'POST',
        
        beforesend: function(){
        $('#btnresponse').html('Cargando...');
        },

        success: function(mensaje){
        $('#btnresponse').html(mensaje);
        }
    });
}

function insertaCliente(){
        
    var cedula = document.getElementById("idCI").value;
    var nombre = document.getElementById("idName").value;
    var zona = document.getElementById("idZona").value;
    
    var parametros = {
        "cedula": cedula,
        "nombre": nombre,
        "zona": zona,
    };

    $.ajax({
        url: "assets/php/insertaCliente.php",
        type: "POST",
        data: parametros,
        beforesend: function(){
            $("#btnresponse").html("Cargando...");
        },
        success: function(mensaje) {
            $('#btnresponse').html(mensaje);
        }
    });
}

function abreTablaCliente() {
    $.ajax({
        url: 'tabla-cliente.php',
        type: 'POST',
        
        beforesend: function(){
        $('#btnresponse').html('Cargando...');
        },

        success: function(mensaje){
        $('#btnresponse').html(mensaje);
        }
    });
}

function abreModCliente(cedula, nombre, zona) {

    var parametros = {
        "cedula": cedula,
        "nombre": nombre,
        "zona": zona
    };

    confirmacion = window.confirm("¿Estás seguro que deseas modificar el cliente seleccionado?");
    
    if (confirmacion == true) {
        $.ajax({
            data: parametros,
            url: 'mod-cliente.php',
            type: 'POST',
            
            beforesend: function(){
            $('#btnresponse').html('Cargando...');
            },

            success: function(mensaje){
            $('#btnresponse').html(mensaje);
            }
        });
    }
}

function modificaCliente(cedulavieja){
        
    var cedula = document.getElementById("idCI").value;
    var nombre = document.getElementById("idName").value;
    var zona = document.getElementById("idZona").value;
    
    var parametros = {
        "vieja": cedulavieja,
        "cedula": cedula,
        "nombre": nombre,
        "zona": zona,
    };

    $.ajax({
        url: "assets/php/modificaCliente.php",
        type: "POST",
        data: parametros,
        beforesend: function(){
            $("#btnresponse").html("Cargando...");
        },
        success: function(mensaje) {
            $('#btnresponse').html(mensaje);
        }
    });
}

function eliminaCliente(cedula) {

    var parametros = {
        "cedula": cedula,
    };

    confirmacion = window.confirm("¿Estás seguro que deseas eliminar el cliente seleccionado?");
    
    if (confirmacion == true) {
        $.ajax({
            data: parametros,
            url: 'assets/php/eliminaCliente.php',
            type: 'POST',
            
            beforesend: function(){
            $('#btnresponse').html('Cargando...');
            },

            success: function(mensaje){
            $('#btnresponse').html(mensaje);
            }
        });
    }

}

function abreNuevoLlenado() {
    $.ajax({
        url: 'nuevo-llenado.php',
        type: 'POST',
        
        beforesend: function(){
        $('#btnresponse').html('Cargando...');
        },

        success: function(mensaje){
        $('#btnresponse').html(mensaje);
        }
    });
}

function abreSelectCliente() {

    $.ajax({
        url: 'select-cliente.php',
        type: 'POST',
        
        beforesend: function(){
        $('#selectCliente').html('Cargando...');
        },

        success: function(mensaje){
        $('#selectCliente').html(mensaje);
        }
    });
}

function abreSelectClienteMOD(id, numbot) {

    var parametros = {
        "id": id,
        "numbot": numbot,
    };

    $.ajax({
        url: 'select-clienteMOD.php',
        type: 'POST',
        data: parametros,
        
        beforesend: function(){
        $('#selectCliente').html('Cargando...');
        },

        success: function(mensaje){
        $('#selectCliente').html(mensaje);
        }
    });
}

function clienteSeleccionadoMOD(id, cedula, nombre, zona) {
    var numbot = document.getElementById("idBotellones").value;

    var parametros = {
        "id": id,
        "cedula": cedula,
        "nombre": nombre,
        "zona": zona,
        "numbot": numbot
    };

    $.ajax({
        url: "mod-llenado.php",
        type: "POST",
        data: parametros,
        beforesend: function(){
            $("#btnresponse").html("Cargando...");
        },
        success: function(mensaje) {
            $('#btnresponse').html(mensaje);
        }
    });
}

function clienteSeleccionado(cedula, nombre, zona) {

    var parametros = {
        "cedula": cedula,
        "nombre": nombre,
        "zona": zona,
    };

    $.ajax({
        url: "nuevo-llenado.php",
        type: "POST",
        data: parametros,
        beforesend: function(){
            $("#btnresponse").html("Cargando...");
        },
        success: function(mensaje) {
            $('#btnresponse').html(mensaje);
        }
    });
}

function insertaLlenado(cedula) {
    var numbotellas = document.getElementById("idBotellones").value;
    var parametros = {
        "cedula": cedula,
        "numbotellas": numbotellas,
    };

    $.ajax({
        url: "assets/php/insertaLlenado.php",
        type: "POST",
        data: parametros,
        beforesend: function(){
            $("#btnresponse").html("Cargando...");
        },
        success: function(mensaje) {
            $('#btnresponse').html(mensaje);
        }
    });
}

function abreTablaLlenado() {
    $.ajax({
        url: 'tabla-llenado.php',
        type: 'POST',
        
        beforesend: function(){
        $('#btnresponse').html('Cargando...');
        },

        success: function(mensaje){
        $('#btnresponse').html(mensaje);
        }
    });
}

function abreModLlenado(id, cedula, numbotellas) {

    var parametros = {
        "id": id,
        "cedula": cedula,
        "numbot": numbotellas
    };

    confirmacion = window.confirm("¿Estás seguro que deseas modificar el registro seleccionado?");
    
    if (confirmacion == true){
        $.ajax({
            url: 'mod-llenado.php',
            type: 'POST',
            data: parametros,
            
            beforesend: function(){
            $('#btnresponse').html('Cargando...');
            },

            success: function(mensaje){
            $('#btnresponse').html(mensaje);
            }
        });
    }

}

function modificaLlenado(id, cedula) {
    var numbotellas = document.getElementById("idBotellones").value;
    var parametros = {
        "id": id,
        "cedula": cedula,
        "numbotellas": numbotellas,
    };

    $.ajax({
        url: "assets/php/modificaLlenado.php",
        type: "POST",
        data: parametros,
        beforesend: function(){
            $("#btnresponse").html("Cargando...");
        },
        success: function(mensaje) {
            $('#btnresponse').html(mensaje);
        }
    });
}

function eliminaLlenado(id) {

    var parametros = {
        "id": id,
    };

    confirmacion = window.confirm("¿Estás seguro que deseas eliminar el registro seleccionado?");
    
    if (confirmacion == true) {
        $.ajax({
            data: parametros,
            url: 'assets/php/eliminaLlenado.php',
            type: 'POST',
            
            beforesend: function(){
            $('#btnresponse').html('Cargando...');
            },

            success: function(mensaje){
            $('#btnresponse').html(mensaje);
            }
        });
    }

}