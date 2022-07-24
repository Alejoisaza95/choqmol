<?php
include "../app/config/Conexion_BD.php";
$id = $_GET["id"];
$naves = "SELECT * FROM naves WHERE Id_Nave = '$id'";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Nave</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../public/css/Nave.css">
</head>

<body>
    <div id="modNave" class="contenedor">
        <h1>Modificar Nave</h1>
        <form id="formulario_modNave" class="form" action="actNave.php" method="post">
            <div class="row">
                <!-- Código que trae a los campos del formulario los 
               datos de la nave consignados en la Base de Datos, para su modificación.   -->
                <?php
$consulta = mysqli_query($conexion, $naves);
while ($row = mysqli_fetch_assoc($consulta)) {
    echo "
   
                    <input type='hidden' name='id' value='$row[Id_Nave]'>
                    
                    <div class='col-md-6'>
                    <label class='visually-hidden' for='autoSizingSelect'>Nombre</label>
                    <input type='text' name='Nombre' value='$row[Nombre]' class='form-control' placeholder='Nombre' pattern='[a-zA-Z]+ && [' ']+]' required>
                    </div>
                    
                    <div id='seleccion_1' class='col-md-6'>
                    <label class='visually-hidden' for='autoSizingSelect'>Clasificación</label>
                    <select class='form-select' name='seleccion_1' id='autoSizingSelect' required >
                        <option selected value='$row[Clasificacion]'>Seleccione</option>
                        <option value='Vehículos Lanzadera'>Vehículos Lanzadera</option>
                        <option value='Naves no Tripuladas'>Naves no Tripuladas</option>
                        <option value='Naves Tripuladas'>Naves Tripuladas</option>
                    </select>
                    </div>

                    <div class='col-md-6'>
                    <label class='visually-hidden' for='autoSizingSelect'>Proposito</label>
                    <input type='text' name='Proposito' value='$row[Proposito]' class='form-control' placeholder='Proposito' pattern='[a-zA-Z]+ && [' ']+]' required>
                    </div>

                    <div class='col-md-6'>
                    <label class='visually-hidden' for='autoSizingSelect'>Peso</label>
                    <input type='text' name='Peso' value='$row[Peso]' class='form-control' placeholder='Peso' pattern='[a-zA-Z]+ && [' ']+]' required>
                    </div>

                    <div class='col-md-6'>
                    <label class='visually-hidden' for='autoSizingSelect'>Desarrolla</label>
                    <input type='text' name='Desarrolla' value='$row[Desarrolla]' class='form-control' placeholder='Desarrolla' pattern='[a-zA-Z]+ && [' ']+]' required>
                    </div>

                    <div class='col-md-6'>
                    <label class='visually-hidden' for='autoSizingSelect'>Estado</label>
                    <input type='text'name='Estado' value='$row[Estado]' class='form-control' placeholder='Estado' pattern='[a-zA-Z]+ && [' ']+]' required>
                    </div>
                ";}
                ?>
            </div>
            <br>
            <!-- Botón para guardar los cambios realizados en la información de la nave  -->
            <div>
                <button type="submit" name="Modificar_Nave" class="btnModificar_Nave">Guardar</button>
            </div>
        </form>
        <!-- Botón para devolverse a la página de inventario  -->
        <div>
            <button onclick="location.href='../public/inventario.php'" type="submit" name="Cancelar"
                class="btn_RegresarInvantario">Cancelar</button>
        </div>
    </div>

</body>

</html>