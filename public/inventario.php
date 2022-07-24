<?php
include "../app/config/Conexion_BD.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../public/css/inventario.css">
</head>

<body>
    <div id="modNave" class="contenedor">
        <h1>Inventario</h1>
        <form id="formulario_modNave" class="form" action="inventario.php" method="post">
            <div  class="row">
                <div id="buscarNaves" class="col-md-6">
                    <!-- Campo buscar o filtrar Nave -->
                    <input type="text" id="txtBuscar" name="Buscar" class="form-control" placeholder="Buscar Nave">
                </div>
                <div id="btnsInventario" class="col-md-5">
                    <!-- Botón Buscar o filtrar Nave -->
                    <button type="submit" name="btnBuscar" class="btn_Buscar">Buscar</button>
                    <!-- Botón Crear Nave -->
                    <button type="submit" name="btnCrearNave" class="btn_CrearNave"><a href="crearNave.php">Crear Nave</a></button>
                </div>
                <!-- Tabla de inventario de naves -->
                <div id="tabla">
                    <table class="table">
                        <thead>
                            <tr>
                            <!-- <th scope="col">Id</th>                               -->
                                <th scope="col">Nombre</th>                              
                                <th scope="col">Clasificación</th>
                                <th scope="col">Proposito</th>
                                <th scope="col">Peso</th>
                                <th scope="col">Resarrolla</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>

                            </tr>
                        </thead>
                        <!-- Código php para invocar la consulta realizada a la base de datos de la tabla de naves-->
                        <tbody>
                            <?php
                            include "../app/models/Leer.php";

                            while ($fila = mysqli_fetch_assoc($result)) {
                                echo "
                                <tr>
                                    <td>{$fila['Nombre']}</td>
                                    <td>{$fila['Clasificacion']}</td>
                                    <td>{$fila['Proposito']}</td>
                                    <td>{$fila['Peso']}</td>
                                    <td>{$fila['Desarrolla']}</td>
                                    <td>{$fila['Estado']}</td>
                                    <td><a href='modNave.php?id=" . $fila['Id_Nave'] . "'><img src='./img/icons8-Edit-32.png' alt='Edit'></a></td>
                                    <td><a href='BorrarNave.php?id=" . $fila['Id_Nave'] . "'><img src='./img/icons8-Trash-32.png' alt='Edit'></a></td>
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