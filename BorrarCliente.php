<?php
include 'Conexion_BD.php';

$id=$_GET['id'];
$eliminar="DELETE FROM clientes WHERE Id_Cliente='$id'"; 
$resultado=mysqli_query($conexion,$eliminar);

if ($resultado){
    echo "<script>alert('Se ha eliminado el cliente exitosamente');
    window.location='/choqmol/listadoClientes.php'</script>";
} else {
    echo "<script>alert('No se pudo eliminar el registro');
    window.history.go(-1);</script>";
    }
?>