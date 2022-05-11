<?php
include 'BorrarCliente.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/Usuario.css">
</head>

<body>
    <div id="" class="contenedor">
        <h1>Listado de Usuarios</h1>
        <form id="formulario_listadoUsuarios" class="form" action="" method="post">
            <div class="row">
                <div class="col-md-8">
                    <!-- Campo buscar o filtrar Usuario -->
                    <label class="visually-hidden" for="autoSizingSelect">Buscar</label>
                    <input type="text" id="txtBuscar" name="Buscar" class="form-control" placeholder="Buscar Usuario">
                    <!-- Botón Crear Usuario -->
                    <button type="submit" name="btnCrearUsuario" class="btn_CrearUsuario"><a href="crearUsuario_menu.php">Crear Usuario</a></button>
                    <!-- Botón Modificar o actualizar Usuario -->
                    <button type="submit" name="btnModificarUsuario"><a href="modUsuario.php">Modificar</a></button>
                    <!-- Botón Eliminar Usuario -->
                    <button type="submit" name="btnEliminarUsuario" class="btn_EliminarUsuario">Eliminar Usuario</button>
                    <!-- Botón atrás -->
                    <button type="submit" name="btnAtras"><a href="menu.php">Atrás</button>
                </div>
                <div>
                    <!-- Botón Buscar o filtrar Usuario -->
                    <button type="submit" name="btnBuscar" class="btn_Buscar">Buscar</button>
                </div>
                <!-- Tabla de listado de Usuarios -->
                <div id="tabla">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Num_Documento</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Clave</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Estado Cliente</th>
                            </tr>
                        </thead>
                        <!-- Código php para invocar la consulta realizada a la base de datos de la tabla de usuarios-->
                        <tbody>
                            <?php
                            include "Leer.php";

                            while ($fila = mysqli_fetch_assoc($result)) {
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