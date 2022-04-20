<?php

session_start();
if (isset($_POST['Cerrar_Sesion'])){

session_destroy();
header ("location:index.php");
}
?>

