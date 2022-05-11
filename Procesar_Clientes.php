<?php
include 'Conexion_BD.php';

$id=$_POST['Id_Cliente'];
$documento = $_POST['Documento'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Correo'];
$direccion = $_POST['Direccion'];
$telefono = $_POST['Telefono'];
$seleccion_tipo = $_POST['TipoCliente'];
$seleccion_estado = $_POST['EstadoCliente'];

//Actualizar datos 
$actualizar = "UPDATE clientes SET Num_Documento='$documento', Nombre='$nombre', Apellido='$apellido',
            Correo='$correo', Direccion='$direccion', Telefono='$telefono', Tipo_Cliente='$seleccion_tipo',
            Estado_Cliente='$seleccion_estado' WHERE Id_Cliente=$id";

$resultado=mysqli_query($conexion,$actualizar);

if ($resultado){
    echo "<script>alert('Se ha actualizado el cliente exitosamente');
    window.location='/choqmol/listadoClientes.php'</script>";
} else {
    echo "<script>alert('No se pudo actualizar');
    window.history.go(-1);</script>";
    }

if (isset($_POST["Cancelar"])){
   header ("Location: listadoClientes.php");
}

?>