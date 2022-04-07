<?php

$documento = $_POST['Documento'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Correo'];
$direccion = $_POST['Direccion'];
$telefono = $_POST['Telefono'];
$seleccion_1 = $_POST['Tipo_Cliente'];
$seleccion_2 = $_POST['Estado_Cliente'];

$insertar = "INSERT INTO clientes (Num_Documento,Nombre,Apellido,Correo,
Direccion,Telefono,Tipo_Cliente,Estado_Cliente) VALUES('$documento', '$nombre', 
'$apellido', '$correo', '$direccion', '$telefono', '$seleccion_1',
'$seleccion_2')";

$ejecutar = mysqli_query($conexion,$insertar);


?>