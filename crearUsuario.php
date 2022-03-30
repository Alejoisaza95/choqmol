<?php
include ("registrar_Usuario.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/Usuario.css">
</head>

<body>
    <div id="crearUsuario" class="contenedor">
        <h1 id="tituloCrear">Crear Usuario</h1>
        <div id="logo" class="">
            <img src="img/logo.jpg" alt="">
        </div>
        <form id="formulario_crearUsuario" class="form" action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre" pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Apellido</label>
                    <input type="text" name="Apellido" id="Apellido" class="form-control" placeholder="Apellido" pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Número de documento</label>
                    <input type="text" name="Documento" id="Documento" class="form-control" placeholder="Número de documento" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="Correo" id="Correo" placeholder="Correo" required>
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="Direccion"id="inputAddress" placeholder="Dirección" required>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Teléfono</label>
                    <input type="text" id="Telefono" class="form-control" name="Telefono" placeholder="Ingresa celular o fijo" title="Es necesario ingresar 7 o 10 digitos" pattern="[0-9]{7,10}" required>
                </div>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Usuario</label>
                    <input type="text" id="usuario" class="form-control" name="User" placeholder="Usuario" required>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Clave</label>
                    <input type="text" id="Clave" class="form-control" name="password" placeholder="Contraseña" required>
                </div>
            </div>
            <div class="col-md-6">
                <label class="visually-hidden" for="autoSizingSelect">Rol</label>
                <select class="form-select" name="Tipo_User" id="autoSizingSelect" required>
                    <option disabled selected value="">Seleccione</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Vendedor">Vendedor</option>
                </select>
            </div>
            <br>
            <button  onclick="location.href='/choqmol/index.php'" type="submit" name="Regresar" class="btn btn-primary">Regresar</button>
            <button type="submit" name="Crear_Usuario" class="btn btn-primary">Crear Usuario</button>
        </form>
    </div>

</body>

</html>