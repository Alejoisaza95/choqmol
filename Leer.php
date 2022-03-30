<?php
include "Conexion_BD.php";

if(!isset($_POST['Buscar'])){

    $_POST["Buscar"] = "";
    $buscar = $_POST["Buscar"];
}

$buscar = $_POST["Buscar"];

$sql_leer = "SELECT * FROM clientes WHERE Nombre LIKE '%".$buscar."%'  
OR Apellido LIKE '%".$buscar."%' OR Direccion LIKE '%".$buscar."%'  OR Tipo_Cliente LIKE '%".$buscar."%'
OR Estado_Cliente LIKE '%".$buscar."%'";

$result = mysqli_query($conexion,$sql_leer);
if(!$result){
    var_dump(mysqli_error($conexion)); 
    exit;
}
?>