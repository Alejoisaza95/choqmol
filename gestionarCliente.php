<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Cliente</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/Cliente.css">
</head>

<body>
    <div id="gestionarCliente" class="contenedor">
        <h1>Gestionar Cliente</h1>
        <form id="formulario_gestionarCliente" class="form" action="index.html" method="post">
            <div class="row">
                <div class="col-md-8">
                    <label class="visually-hidden" for="autoSizingSelect">Buscar</label>
                    <input type="text" id="txtBuscar" class="form-control" placeholder="Buscar Cliente">
                </div>
                <div>
                    <button type="submit" name="btnBuscar" class="btn_BuscarComentario">Buscar</button>
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
                                <td>Hola mundo</td>
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
                                <td>Interesado</td>
                                <td>Activo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="" class="form-label">Comentario</label>
                        <textarea class="form-control" id="Comentario" rows="3"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="btnGuardarComentario" class="btn_GuardarComentario">Guardar Comentario</button>
                        <button onclick="location.href='/choqmol/menu.php'" type="submit" name="Regresar_Comentarios" class="btn_RegresarComentarios">Regresar</button>
                    </div>
                </div>
            </div>
            <br>
            <div>

            </div>
        </form>
    </div>

</body>

</html>