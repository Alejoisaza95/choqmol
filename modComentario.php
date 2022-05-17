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
        <h1>Modificar Comentario</h1>
        <form id="formulario_gestionarCliente" class="form" action="index.html" method="post">
            <div class="row">
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