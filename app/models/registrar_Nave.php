<!-- Código que guarda en Base de Datos los datos ingresados en la pantalla crearNave.php -->

<?php
 //Código para almacenar los datos ingresados en las variables definidas. 
    include '../app/config/Conexion_BD.php';

// require_once Lanzadera();

    if (isset($_POST["Crear_Nave"])){
        // $id_nave = $_POST['Id_Nave'];
        $nombre = $_POST['Nombre'];
        $seleccion_1 = $_POST['seleccion_1'];
        $proposito = $_POST['Proposito'];
        $peso = $_POST['Peso'];
        $desarrolla = $_POST['Desarrolla'];
        $estado = $_POST['Estado'];

         //Código que inserta los datos de las variables en cada una de las columnas de la Base de Datos.
        $insertar = "INSERT INTO naves (Nombre,Clasificacion,Proposito,Peso,Desarrolla,Estado) 
        VALUES('$nombre', '$seleccion_1', '$proposito', '$peso', '$desarrolla', '$estado')";

        //Variable que ejecuta la consulta de Insertar.
        $ejecutar = mysqli_query($conexion,$insertar);

        if ($ejecutar){
            echo "<script>alert('Se ha registrado la nave exitosamente');
            window.location='../public/crearNave.php'</script>";
        } else {
            echo "<script>alert('No se pudo registrar');
            window.history.go(-1);</script>";
        }

    }

?>