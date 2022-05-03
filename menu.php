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
      <!-- Titulo -->
      <h1 class="fa fa-car">CRM CHOQUETMOL</h1>
      <!-- <input type="checkbox" id="menu_bar"> -->
      <!-- <label class="fa fa-bars" for="menu_bar"></label> -->

      <!-- Barra de nabegación -->
      }<nav class="menu">
        <ul class="nav">
          <!-- <li><a class="nav-link active" aria-current="page" href="#">Inicio</a></li> -->
          <li><a class="nav-link" href="#">Clientes</a>
            <!-- Sublista de menú -->
            <ul>
              <!-- <li><a class="nav-link" href="/choqmol/crearCliente.php">Crear Cliente</a></li> -->
              <li><a class="nav-link" href="/choqmol/listadoClientes.php">Listado de Clientes</a></li>
              <li><a class="nav-link" href="/choqmol/gestionarCliente.php">Historial de clientes</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="#">Usuarios</a>
            <!-- Sublista de menú -->
            <ul>
              <li><a class="nav-link" href="/choqmol/crearUsuario.php">Crear Usuarios</a></li>
              <li><a class="nav-link" href="/choqmol/modUsuario.php">Listado de Usuarios</a></li>
            </ul>
          </li>
        </ul>
        <!-- Botón de cerrar sesión -->
        <div class="Salir">
          <button onclick="location.href='/choqmol/index.php'" type="submit" name="Cerrar_Sesion" id="Salir_Sistema" class="btn btn-primary">Cerrar Sesión</button <?php include 'Cierre.php' ?>>
        </div>
      </nav>
    </div>
  </header>

      <!-- Imagen página de inicio -->
  <div class="img">
    <img src="img/logo.jpg" alt="" height="500px" width="600px">
  </div>

</body>

</html>