<?php
    // Inicio de sesion
    session_start();
    $usuario = $_SESSION["username"];

    // Si no se ha iniciado sesion se redirecciona a login
    if(!isset($usuario)){
    header("location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thomsom</title>

    <!--Material Icons (Google Icon Font)-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS (Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <!-- Navegador -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <!-- Empresa Thomsom -->
            <a class="navbar-brand" href="#">
            <i id="logonav" class="material-icons">invert_colors</i>
            Thomsom, Inc.</a>
            <form class="d-flex">
                <a class="btn btn-outline-danger" href="assets/php/salir.php">Salir</a>
            </form>
        </div>
    </nav>

    <div id="container">
        <!-- Inicio -->
        <div class="fondo-marino">
            <br><br>
            <div class="container px-4 py-4 rounded shadow-sm bg-white inicio-format">
                <h2 class="pb-2 border-bottom">Actividad 4</h2>

                <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-4">
                    <div class="col d-flex flex-column align-items-start gap-2">
                        <h2 class="fw-bold text-body-emphasis">Empresa Embotelladora Thomsom</h2>
                        <p class="text-body-secondary">Diseñe una aplicación web que permita a la empresa embotelladora Thomsom realizar el llenado de botellones de agua para sus clientes ubicados en varias zonas del país.</p>
                        <p class="text-body-secondary">La aplicación debe de mostrar un historicos de los registros suministrados, así como la fecha y la hora del llenado del botellón y la cantidad de botellas. De igual manera debe de poder generar reportes PDF de las operaciones realizadas.</p>
                    </div>

                    <div class="col">
                        <div class="row row-cols-1 row-cols-sm-12 g-4">
                            <div class="col d-flex flex-column gap-2">
                                <h4 class="fw-semibold mb-0 text-body-emphasis">Clientes</h4>
                                <p class="text-body-secondary">Mira los clientes registrados o ingresa un nuevo cliente en el sistema.</p>
                                <div class="col">
                                    <input type="submit" value="Registro" name="btnLogin" class="btn btn-danger col-sm-5" onclick="abreTablaCliente();">
                                    <input type="submit" value="Nuevo" name="btnLogin" class="btn btn-danger col-sm-5" onclick="abreNuevoCliente();">
                                </div>
                            </div>


                            <div class="col d-flex flex-column gap-2">
                                <h4 class="fw-semibold mb-0 text-body-emphasis">Llenado de Botellones</h4>
                                <p class="text-body-secondary">Mira el registro de las operaciones de llenado de botellones realizadas o registra una nueva operación en el sistema.</p>
                                <div class="col">
                                    <input type="submit" value="Registro" name="btnLogin" class="btn btn-danger col-sm-5" onclick="abreTablaLlenado();">
                                    <input type="submit" value="Nuevo" name="btnLogin" class="btn btn-danger col-sm-5" onclick="abreNuevoLlenado();">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
        </div>
        
        <!-- Aquí se mostrará el contenido obtenido con AJAX -->
        <div id="btnresponse"></div>
        
    </div>

    <!-- Footer -->
    <footer>
        <br>
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="http://virtudvirtual.site" class="nav-link px-2 text-muted">Pagina Principal</a></li>
            <li class="nav-item"><a href="https://github.com/Mariduq/pw-act4.git" class="nav-link px-2 text-muted">Github</a></li>
        </ul>
        <p class="text-center text-muted">© 2023 Todos los derechos reservados. Maracaibo - Zulia. Venezuela</p>
        <br>
    </footer>

    <!-- JavaScript (AJAX) -->
    <script src="assets/js/ajax.js"></script>

    <!-- JavaScript (Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>