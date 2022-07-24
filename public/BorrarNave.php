<?php
include '../app/config/Conexion_BD.php';
  
//Código que recibe el id de la fila y se almacena la respectiva consulta
$id=$_GET['id'];
$eliminar="DELETE FROM Naves WHERE Id_Nave='$id'"; 

//Variable que realiza la acción solicitada en el paso anterior
$resultado=mysqli_query($conexion,$eliminar);

if ($resultado){
    echo "<script>alert('Se ha eliminado la nave exitosamente');
    window.location='../public/inventario.php'</script>";
} else {
    echo "<script>alert('No se pudo eliminar el registro');
    window.history.go(-1);</script>";
    }
?>
