<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/Usuario.css">
</head>

<body id="bodymodUsuario">
    <div id="modUsuario" class="contenedor">
        <h1>Modificar Usuario</h1>
        <form id="formulario_modUsuario" class="form" action="index.html" method="post">
            <div class="row">
                <div class="col-md-8">
                    <label class="visually-hidden" for="autoSizingSelect">Buscar</label>
                    <input type="text" id="txtBuscar" class="form-control" placeholder="Buscar Usuario">
                    <button type="submit" id="btnBuscar" class="btn btn-primary">Buscar</button>
                </div>
                <div id="tabla">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Corre</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nataly</td>
                                <td>Martínez</td>
                                <td>7777777</td>
                                <td>nataly.97.11.m@gmail.com</td>
                                <td>Clle 72</td>
                                <td>3502181420</td>
                                <td>Admin</td>
                                <td>Activo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Alejandro</td>
                                <td>Isaza</td>
                                <td>888888</td>
                                <td>alejandro@gmail.com</td>
                                <td>Clle 50</td>
                                <td>123456789</td>
                                <td>Admin</td>
                                <td>Activo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="visually-hidden" for="autoSizingSelect">Nombre</label>
                        <input type="text" id="Nombre" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-md-6">
                        <label class="visually-hidden" for="autoSizingSelect">Apellido</label>
                        <input type="text" id="Apellido" class="form-control" placeholder="Apellido">
                    </div>
                    <div class="col-md-6">
                        <label class="visually-hidden" for="autoSizingSelect">Número de documento</label>
                        <input type="text" id="Documento" class="form-control" placeholder="Número de documento">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="Correo" placeholder="Correo">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
                    </div>
                    <div class="col-md-6">
                        <label class="visually-hidden" for="autoSizingSelect">Teléfono</label>
                        <input type="text" id="Telefono" class="form-control" placeholder="Teléfono">
                    </div>
                    <div id="Rol" class="col-md-6">
                        <label class="visually-hidden" for="autoSizingSelect">Rol</label>
                        <select class="form-select" id="autoSizingSelect">
                            <option selected>Seleccione</option>
                            <option value="1">Administrador</option>
                            <option value="2">Vendedor</option>
                        </select>
                    </div>
                    <div id="estadoUsuario" class="col-md-6">
                        <label class="visually-hidden" for="autoSizingSelect">Estado</label>
                        <select class="form-select" id="autoSizingSelect">
                            <option selected>Seleccione</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>
                </div>
                <br>
                <div>
                    <button type="submit" id="Cancelar" class="btn btn-primary">Cancelar</button>
                    <button type="submit" id="Modificar_Usuario" class="btn btn-primary">Guardar Cambios</button>
                </div>
        </form>
    </div>

</body>

</html>