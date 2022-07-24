<?php
include("../app/models/registrar_Nave.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nave</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../public/css/Nave.css">
</head>

<body>
    <div id="crearNave" class="contenedor">
        <!-- Título de la página -->
        <h1>Crear Nave</h1>
        <!-- Formulario para Crear Nave -->
        <form id="formulario_crearNave" class="form" action="" method="post">
            <div class="row">
                <!-- Campo Nombre  -->
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" placeholder="Nombre"
                        pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <!-- Campo seleccionar clasificación -->
                <div name="seleccion_1" class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Clasificación</label>
                    <select required class="form-select" name="seleccion_1" id="autoSizingSelect" required>
                        <option disabled selected value="">Seleccione</option>
                        <option value="Vehículos Lanzadera">Vehículos Lanzadera</option>
                        <option value="Naves no Tripuladas">Naves no Tripuladas</option>
                        <option value="Naves Tripuladas">Naves Tripuladas</option>
                    </select>
                </div>
                <!-- Campo proposito -->
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Proposito</label>
                    <input type="text" name="Proposito" class="form-control" placeholder="Proposito"
                        pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <!-- Campo peso -->
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Peso</label>
                    <input type="text" name="Peso" class="form-control" placeholder="Peso"
                        pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <!-- Campo quien desarrolla el proyecto -->
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Desarrolla</label>
                    <input type="text" name="Desarrolla" class="form-control" placeholder="Desarrolla"
                        pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <!-- Campo Estado actual de la nave -->
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Estado</label>
                    <input type="text" name="Estado" class="form-control" placeholder="Estado"
                        pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>

            </div>
            <!-- Botones -->
            <div>
                <!-- Crear -->
                <button type="submit" name="Crear_Nave" class="btnCrear_Nave">Guardar Nave</button>
            </div>
            <!-- Regresar a inventario -->
            <div>
                <button onclick="location.href='../public/inventario.php'" type="submit" name="Regresar"
                    class="btn_RegresarCrearNave">Regresar</button>
            </div>
    </div>
    </form>
    </div>
</body>

</html>