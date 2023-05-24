<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Importamos los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
  <!-- otras referencias... -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Importamos nuestro archivo CSS personalizado -->
  <link rel="stylesheet" href="css/style.css">
  
  <style>
    .navbar-center {
      flex-grow: 1;
      justify-content: center;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a href="inicio.php" class="nav-link">
          <span class="navbar-brand">P I N T U C A T O</span>

          <i class="bi bi-house-door icono-rosa fs-3"></i>
        </a>

        <!-- Barra de búsqueda centrada -->
        <div class="navbar-center">
          <form class="d-flex" method="GET" action="buscar.php">
            <input class="form-control me-2" type="text" name="search" placeholder="Buscar">
            <button class="btn btn-primary" type="submit">Buscar</button>
          </form>

        </div>



        <!-- Agregamos el menú desplegable -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-list"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="productos.php">Productos</a></li>
                <li><a class="dropdown-item" href="accesorios.php">Accesorios</a></li>
                <li><a class="dropdown-item" href="otros.php">Otros</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                <i class="bi bi-person-circle icono-rosa fs-3"></i>
              </a>
            </li>
          </ul>
        </div>

        <a href="carrito.php" class="btn btn-primary">
          <span class="bi bi-cart-fill"></span> Mi carrito
        </a>


      </div>
    </nav>
  </header>
  <!-- Importamos los archivos JavaScript de Bootstrap (JQuery y Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>