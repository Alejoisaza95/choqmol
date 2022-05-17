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
        <form id="formulario_gestionarCliente" class="form" action="gestionarCliente.php" method="post">
            <div class="row">

                <div class="col-md-8">
                    <label class="visually-hidden" for="autoSizingSelect">Buscar</label>
                    <input type="text" name="txtBuscar" class="form-control" placeholder="Buscar Cliente">
                </div>

                <div>
                    <button type="submit" name="btnBuscar_Comentario" class="btn_BuscarComentario">Buscar</button>
                </div>
                <div id="tabla">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Comentario</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "Leer_Comentario.php";

                            while ($fila = mysqli_fetch_assoc($result)) {
                                echo "
                                <tr>
                                    <td>{$fila['Id']}</td>
                                    <td>{$fila['Nombre_Cliente']}</td>
                                    <td>{$fila['Apellido_Cliente']}</td>
                                    <td>{$fila['Documento_Cliente']}</td>
                                    <td>{$fila['Correo_Cliente']}</td>
                                    <td>{$fila['Direccion_Cliente']}</td>
                                    <td>{$fila['Telefono_Cliente']}</td>
                                    <td>{$fila['Comentario_Cliente']}</td>
                                    <td><a href='actualizarCliente.php?id=".$fila['Id']."'><img src='./img/icons8-Edit-32.png' alt='Edit'></a></td>
                                    <td><a href='BorrarCliente.php?id=".$fila['Id']."'><img src='./img/icons8-Trash-32.png' alt='Edit'></a></td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <label for="" class="form-label">Comentario</label>
                        <textarea class="form-control" id="Comentario" rows="3"></textarea>
                    </div>-->
                    <div>
                        <!-- <button type="submit" name="btnGuardarComentario" class="btn_GuardarComentario">Guardar Comentario</button> -->
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