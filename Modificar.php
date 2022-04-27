<?php 

include "Conexion_BD.php";
if (isset($_POST['Modificar_Cliente'])){
    if ($resultado = mysqli_query($mysqli, "SELECT * FROM clientes WHERE Nombre LIKE '%".$buscar."%' OR Apellido LIKE '%".$buscar."%'", MYSQLI_USE_RESULT)) {
        $formulario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    }

}

?>