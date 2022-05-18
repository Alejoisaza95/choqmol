<?php
include 'Conexion_BD.php';

$id=$_GET['id'];
$eliminar_comentario="DELETE FROM comentarios_clientes WHERE Id='$id'"; 
$resultado=mysqli_query($conexion,$eliminar_comentario);

if ($resultado){
    echo "<script>alert('Se ha eliminado el comentario exitosamente');
    window.location='/choqmol/gestionarCliente.php'</script>";
} else {
    echo "<script>alert('No se pudo eliminar el comentario');
    window.history.go(-1);</script>";
    }
?>