<?php 

include "Conexion_BD.php";
include "Leer.php";

if (isset($_POST['Modificar_Cliente'])){
    if ($resultado = mysqli_query($mysqli, "SELECT * FROM clientes WHERE Id_Cliente LIKE '%".$buscar."%' OR Num_Documento LIKE '%".$buscar."%'", MYSQLI_USE_RESULT)) {
        $formulario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    }

}

?>