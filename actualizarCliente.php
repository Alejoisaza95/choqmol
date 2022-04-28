<?php
include "Conexion_BD.php";
include "Modificar.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/Cliente.css">
</head>

<body>
    <div id="modCliente" class="contenedor">
        <h1>Modificar Cliente</h1>
        <form id="formulario_modCliente" class="form" action="Modificar.php" method="post">
            <div class="row">

                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Nombre</label>
                    <input type="text" name="Nombre" value="<?php echo $formulario['Nombre'];?>" class="form-control" placeholder="Nombre" pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Apellido</label>
                    <input type="text" name="Apellido" value="<?php echo $formulario['Apellido'];?>" class="form-control" placeholder="Apellido" pattern="[a-zA-Z]+ && [' ']+]" required>
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Número de documento</label>
                    <input type="text" name="Documento" value="<?php echo $formulario['Num_Documento'];?>" class="form-control" placeholder="Número de documento" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="Correo" value="<?php echo $formulario['Correo'];?>" placeholder="Correo" required>
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="inputAddress" value="<?php echo $formulario['Direccion'];?>" placeholder="Dirección">
                </div>
                <div class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Teléfono</label>
                    <input type="text" id="Telefono" value="<?php echo $formulario['Telefono'];?>" class="form-control" placeholder="Teléfono">
                </div>
                <div id="tipoCliente" value="<?php echo $formulario['Tipo_Cliente'];?>" class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Tipo de cliente</label>
                    <select required class="form-select" name="TipoCliente" id="autoSizingSelect" required>
                        <option disabled selected value="">Seleccione</option>
                        <option value="Mayorista">Mayorista</option>
                        <option value="De tal">De tal</option>
                    </select>
                </div>
                <div id="estadoCliente" value="<?php echo $formulario['Estado_Cliente'];?>" class="col-md-6">
                    <label class="visually-hidden" for="autoSizingSelect">Estado</label>
                    <select required class="form-select" name="EstadoCliente" id="autoSizingSelect">>
                        <option disabled selected value="">Seleccione</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
            </div>
            <br>
            <div>
                <button type="submit" id="Cancelar" class="btn btn-primary">Cancelar</button>
                <button type="submit" id="Modificar_Cliente" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>

</body>

</html>