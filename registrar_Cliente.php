

<?php
//Recibo todos los datos del formulario
    include 'Conexion_BD.php';

    if (isset($_POST["Crear_Cliente"])){
        $documento = $_POST['Documento'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $correo = $_POST['Correo'];
        $direccion = $_POST['Direccion'];
        $telefono = $_POST['Telefono'];
        $seleccion_1 = $_POST['TipoCliente'];
        $seleccion_2 = $_POST['EstadoCliente'];

        $insertar = "INSERT INTO clientes (Num_Documento,Nombre,Apellido,Correo,
        Direccion,Telefono,Tipo_Cliente,Estado_Cliente) VALUES('$documento', '$nombre', 
        '$apellido', '$correo', '$direccion', '$telefono', '$seleccion_1',
        '$seleccion_2')";

        $ejecutar = mysqli_query($conexion,$insertar);

        if ($ejecutar){
            echo "<script>alert('Se ha registrado el cliente exitosamente');
            window.location='/choqmol/crearCliente.php'</script>";
        } else {
            echo "<script>alert('No se pudo registrar');
            window.history.go(-1);</script>";
        }

    }

?>