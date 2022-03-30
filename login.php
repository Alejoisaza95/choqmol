<?php
    include 'Conexion_BD.php';

    if(isset($_POST["Crear_Usuario"])) {
      header("location:/choqmol/crearUsuario.php");
    }
    
    if (isset($_POST["Ingresar"])){
        $usuario_login = $_POST['Usuario'];
        $contra = $_POST['Clave'];

        $validar = "SELECT * FROM usuarios WHERE User='$usuario_login' and Password_User='$contra'";

        $validar_login = mysqli_query($conexion,$validar); 

        $filas= mysqli_num_rows($validar_login); 


        if ($filas>0){
          header("location:/choqmol/menu.php");

        } else {
          echo "<script>alert('Usuario o clave invalida. Por favor verifique de nuevo');
                window.location='/choqmol/index.php'</script>";
         
          exit;
        }
        
    }



?>