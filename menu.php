<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/menu.css">
</head>

<body>
  <header>
    <div class="contenedor">
      <h1 class="fa fa-car">CRM CHOQUETMOL</h1>
      <!-- <input type="checkbox" id="menu_bar"> -->
      <!-- <label class="fa fa-bars" for="menu_bar"></label> -->
      <nav class="menu">
        <ul class="nav">
          <li><a class="nav-link active" aria-current="page" href="#">Inicio</a></li>
          <li><a class="nav-link" href="#">Clientes</a>
            <ul>
              <li><a class="nav-link" href="/crearCliente.html">Crear Cliente</a></li>
              <li><a class="nav-link" href="/modCliente.html">Modificar Clientes</a></li>
              <li><a class="nav-link" href="/gestionarCliente.html">Gestión de clientes</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="#">Usuario</a>
            <ul>
              <li><a class="nav-link" href="/crearUsuario.html">Crear Usuarios</a></li>
              <li><a class="nav-link" href="/modUsuario.html">Modificar Usuarios</a></li>
            </ul>
          </li>
        </ul>
        <div class="Salir">
          <button type="submit" id="Salir_Sistema" class="btn btn-primary">Cerrar Sesión</button>
        </div>
      </nav>
    </div>
  </header>


  <div class="img">
    <img src="img/logo.jpg" alt="" height="500px" width="600px">
  </div>

</body>

</html>
