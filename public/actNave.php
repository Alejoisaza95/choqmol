<?php
include '../app/config/Conexion_BD.php';
// Se almacenan en variables los datos almacenados por los campos del formulario ubicado en la  pantalla modNave.php
// $id = $_POST['Id_Nave'];

$nombre = $_POST['Nombre'];
$seleccion_1 = $_POST['seleccion_1'];
$proposito = $_POST['Proposito'];
$peso = $_POST['Peso'];
$desarrolla = $_POST['Desarrolla'];
$estado = $_POST['Estado'];

//Consulta en Base de Datos para generar la actualización de los datos de la nave
$actualizar = "UPDATE naves SET Nombre='$nombre', Clasificacion='$seleccion_1',
            Proposito='$proposito', Peso='$peso', Desarrolla='$desarrolla', Estado='$estado' WHERE Nombre='$nombre'";


//Ejecuta la acción descrita anteriormente. 
$resultado=mysqli_query($conexion,$actualizar);

if ($resultado){
    echo "<script>alert('Se ha actualizado la nave exitosamente');
    window.location='../public/inventario.php'</script>";
} else {
    echo "<script>alert('No se pudo actualizar');
    window.history.go(-1);</script>";
}

if (isset($_POST["Cancelar"])){
   header ("Location: inventario.php");
}
?>