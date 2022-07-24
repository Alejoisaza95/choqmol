

<?php
//Recibo todos los datos del formulario
    include ("Conexion_BD.php");
    if (isset($_POST["Crear_Usuario"])){
        $documento = $_POST['Documento'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $correo = $_POST['Correo'];
        $direccion = $_POST['Direccion'];
        $telefono = $_POST['Telefono'];
        $seleccion_1 = $_POST['TipoCliente'];
        $seleccion_2 = $_POST['EstadoCliente'];

        $insertar = "INSERT INTO clientes (Número_Documento,Nombre,Apellido,Correo,
        Direccion,Telefono,Tipo_Cliente,Estado) VALUES('$documento', '$nombre', 
        '$apellido', '$correo', '$direccion', '$telefono', '$seleccion_1',
        '$seleccion_2')";

        $ejecutar = mysqli_query($conexion,$insertar);

    }

?>