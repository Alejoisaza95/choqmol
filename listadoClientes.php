
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cliente</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/Cliente.css">
</head>

<body>
    <div id="modCliente" class="contenedor">
        <h1>Listado de Clientes</h1>
        <form id="formulario_modCliente" class="form" action="listadoClientes.php" method="post">
            <div class="row">
                <div class="col-md-8">
                    <label class="visually-hidden" for="autoSizingSelect">Buscar</label>
                    <input type="text" id="txtBuscar" name="Buscar" class="form-control" placeholder="Buscar Cliente">
                    <button type="submit" id="Buscar" class="btn btn-primary">Buscar</button>
                    <button type="submit" id="Modificar_Cliente" name="Modificar_Cliente" class="btn btn-primary"><a href="actualizarCliente.php">Modificar</a></button>
                    <button type="submit" id="EliminarCliente" class="btn btn-primary">Eliminar Cliente</button>
                    <button type="submit" id="Atras" class="btn btn-primary"><a href="menu.php">Atrás</button>
                </div>
                <div id="tabla">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id_Cliente</th>
                                <th scope="col">Num_Documento</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Tipo_Cliente</th>
                                <th scope="col">Estado_Cliente</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "Leer.php";
                            
                            while ($fila= mysqli_fetch_assoc($result)){
                                echo "
                                <tr>
                                    <td>{$fila['Id_Cliente']}</td>
                                    <td>{$fila['Num_Documento']}</td>
                                    <td>{$fila['Nombre']}</td>
                                    <td>{$fila['Apellido']}</td>
                                    <td>{$fila['Correo']}</td>
                                    <td>{$fila['Direccion']}</td>
                                    <td>{$fila['Telefono']}</td>
                                    <td>{$fila['Tipo_Cliente']}</td>
                                    <td>{$fila['Estado_Cliente']}</td>
                                    

                                </tr>";
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
        </form>
    </div>

</body>

</html>