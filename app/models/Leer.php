<?php
include "../app/config/Conexion_BD.php";

//Código que permite filtrar los  registros de la tabla que se encuentra en la pantalla inventario
if(!isset($_POST['Buscar'])){

    $_POST["Buscar"] = "";
    $buscar = $_POST["Buscar"];
}

$buscar = $_POST["Buscar"];

$sql_leer = "SELECT * FROM naves WHERE Nombre LIKE '%".$buscar."%' OR Clasificacion LIKE '%".$buscar."%'";

$result = mysqli_query($conexion,$sql_leer);
if(!$result){
    var_dump(mysqli_error($conexion)); 
    exit;
}
?>