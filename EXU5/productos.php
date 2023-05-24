<!DOCTYPE html>
<html lang="es">
<head>
<?php

include 'head.php';
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Productos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1 class="text-center">Catálogo de Productos</h1>

    <!-- Categoría 1: Ropa -->
    <h2 class="mt-5">Solventes</h2>
    <?php
  // Configuración de la conexión a la base de datos
  $servidor = "localhost"; // Nombre o dirección IP del servidor MySQL
  $usuario = "root"; // Nombre de usuario de la base de datos
  $contrasena = ""; // Contraseña de la base de datos
  $basedatos = "exau5"; // Nombre de la base de datos
  
  // Establecer la conexión a la base de datos
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

  // Verificar si se pudo establecer la conexión
  if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
  }

  // Resto del código para obtener y mostrar los productos
  $query = "SELECT foto, nombre, precio FROM productos WHERE categoria = 5";

  $result = mysqli_query($conexion, $query); // Ejecuta la consulta
  
  if ($result) {
    $counter = 0; // Contador para controlar la disposición de las tarjetas

    echo '<div class="row mt-3">'; // Inicia una fila

    // Iterar a través de los resultados y mostrar la información de cada producto
    while ($row = mysqli_fetch_assoc($result)) {
      $foto = $row['foto']; // Obtener la URL de la foto del producto
      $nombre = $row['nombre']; // Obtener el nombre del producto
      $precio = $row['precio']; // Obtener el precio del producto

      echo '<div class="col-3 mb-4">';
      echo '<div class="card">';
      echo '<img src="' . $foto . '" alt="' . $nombre . '">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $nombre . '</h5>';
      echo '<p class="card-text">Precio: $' . $precio . '</p>';
      echo '<div class="d-flex">';
      echo '<a href="#" class="btn btn-primary flex-row">Comprar ahora</a>';
      echo '<a href="#" class="btn btn-success flex-row">Agregar al carrito</a>'; 
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';

      $counter++; // Incrementa el contador

      // Si se han mostrado 4 productos, cierra la fila y abre una nueva
      if ($counter % 4 == 0) {
        echo '</div>'; // Cierra la fila actual
        echo '<div class="row mt-3">'; // Abre una nueva fila
      }
    }

    echo '</div>'; // Cierra la última fila

  }

  // Cierra la conexión a la base de datos
  mysqli_close($conexion);
?>
    <h2 class="mt-5">Esmaltes</h2>

    <?php
  // Configuración de la conexión a la base de datos
  $servidor = "localhost"; // Nombre o dirección IP del servidor MySQL
  $usuario = "root"; // Nombre de usuario de la base de datos
  $contrasena = ""; // Contraseña de la base de datos
  $basedatos = "exau5"; // Nombre de la base de datos
  
  // Establecer la conexión a la base de datos
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

  // Verificar si se pudo establecer la conexión
  if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
  }

  // Resto del código para obtener y mostrar los productos
  $query = "SELECT foto, nombre, precio FROM productos WHERE categoria = 1";

  $result = mysqli_query($conexion, $query); // Ejecuta la consulta
  
  if ($result) {
    $counter = 0; // Contador para controlar la disposición de las tarjetas

    echo '<div class="row mt-3">'; // Inicia una fila

    // Iterar a través de los resultados y mostrar la información de cada producto
    while ($row = mysqli_fetch_assoc($result)) {
      $foto = $row['foto']; // Obtener la URL de la foto del producto
      $nombre = $row['nombre']; // Obtener el nombre del producto
      $precio = $row['precio']; // Obtener el precio del producto

      echo '<div class="col-3 mb-4">';
      echo '<div class="card">';
      echo '<img src="' . $foto . '" alt="' . $nombre . '">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $nombre . '</h5>';
      echo '<p class="card-text">Precio: $' . $precio . '</p>';
      echo '<div class="d-flex">';
      echo '<a href="#" class="btn btn-primary flex-row">Comprar ahora</a>';
      echo '<a href="#" class="btn btn-success flex-row">Agregar al carrito</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';

      $counter++; // Incrementa el contador

      // Si se han mostrado 4 productos, cierra la fila y abre una nueva
      if ($counter % 4 == 0) {
        echo '</div>'; // Cierra la fila actual
        echo '<div class="row mt-3">'; // Abre una nueva fila
      }
    }

    echo '</div>'; // Cierra la última fila

  }

  // Cierra la conexión a la base de datos
  mysqli_close($conexion);
?>
    
    <h2 class="mt-5">Aerosoles</h2>

    <?php
  // Configuración de la conexión a la base de datos
  $servidor = "localhost"; // Nombre o dirección IP del servidor MySQL
  $usuario = "root"; // Nombre de usuario de la base de datos
  $contrasena = ""; // Contraseña de la base de datos
  $basedatos = "exau5"; // Nombre de la base de datos
  
  // Establecer la conexión a la base de datos
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

  // Verificar si se pudo establecer la conexión
  if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
  }

  // Resto del código para obtener y mostrar los productos
  $query = "SELECT foto, nombre, precio FROM productos WHERE categoria = 2";

  $result = mysqli_query($conexion, $query); // Ejecuta la consulta
  
  if ($result) {
    $counter = 0; // Contador para controlar la disposición de las tarjetas

    echo '<div class="row mt-3">'; // Inicia una fila

    // Iterar a través de los resultados y mostrar la información de cada producto
    while ($row = mysqli_fetch_assoc($result)) {
      $foto = $row['foto']; // Obtener la URL de la foto del producto
      $nombre = $row['nombre']; // Obtener el nombre del producto
      $precio = $row['precio']; // Obtener el precio del producto

      echo '<div class="col-3 mb-4">';
      echo '<div class="card">';
      echo '<img src="' . $foto . '" alt="' . $nombre . '">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $nombre . '</h5>';
      echo '<p class="card-text">Precio: $' . $precio . '</p>';
      echo '<div class="d-flex">';
      echo '<a href="#" class="btn btn-primary flex-row">Comprar ahora</a>';
      echo '<a href="#" class="btn btn-success flex-row">Agregar al carrito</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';

      $counter++; // Incrementa el contador

      // Si se han mostrado 4 productos, cierra la fila y abre una nueva
      if ($counter % 4 == 0) {
        echo '</div>'; // Cierra la fila actual
        echo '<div class="row mt-3">'; // Abre una nueva fila
      }
    }

    echo '</div>'; // Cierra la última fila

  }

  // Cierra la conexión a la base de datos
  mysqli_close($conexion);
?>

    
    <h2 class="mt-5">Texturas y Efectos</h2>

    <?php
  // Configuración de la conexión a la base de datos
  $servidor = "localhost"; // Nombre o dirección IP del servidor MySQL
  $usuario = "root"; // Nombre de usuario de la base de datos
  $contrasena = ""; // Contraseña de la base de datos
  $basedatos = "exau5"; // Nombre de la base de datos
  
  // Establecer la conexión a la base de datos
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

  // Verificar si se pudo establecer la conexión
  if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
  }

  // Resto del código para obtener y mostrar los productos
  $query = "SELECT foto, nombre, precio FROM productos WHERE categoria = 3";

  $result = mysqli_query($conexion, $query); // Ejecuta la consulta
  
  if ($result) {
    $counter = 0; // Contador para controlar la disposición de las tarjetas

    echo '<div class="row mt-3">'; // Inicia una fila

    // Iterar a través de los resultados y mostrar la información de cada producto
    while ($row = mysqli_fetch_assoc($result)) {
      $foto = $row['foto']; // Obtener la URL de la foto del producto
      $nombre = $row['nombre']; // Obtener el nombre del producto
      $precio = $row['precio']; // Obtener el precio del producto

      echo '<div class="col-3 mb-4">';
      echo '<div class="card">';
      echo '<img src="' . $foto . '" alt="' . $nombre . '">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $nombre . '</h5>';
      echo '<p class="card-text">Precio: $' . $precio . '</p>';
      echo '<div class="d-flex">';
      echo '<a href="#" class="btn btn-primary flex-row">Comprar ahora</a>';
      echo '<a href="#" class="btn btn-success flex-row">Agregar al carrito</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';

      $counter++; // Incrementa el contador

      // Si se han mostrado 4 productos, cierra la fila y abre una nueva
      if ($counter % 4 == 0) {
        echo '</div>'; // Cierra la fila actual
        echo '<div class="row mt-3">'; // Abre una nueva fila
      }
    }

    echo '</div>'; // Cierra la última fila

  }

  // Cierra la conexión a la base de datos
  mysqli_close($conexion);
?>

    <h2 class="mt-5">Maderas</h2>

    <?php
  // Configuración de la conexión a la base de datos
  $servidor = "localhost"; // Nombre o dirección IP del servidor MySQL
  $usuario = "root"; // Nombre de usuario de la base de datos
  $contrasena = ""; // Contraseña de la base de datos
  $basedatos = "exau5"; // Nombre de la base de datos
  
  // Establecer la conexión a la base de datos
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

  // Verificar si se pudo establecer la conexión
  if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
  }

  // Resto del código para obtener y mostrar los productos
  $query = "SELECT foto, nombre, precio FROM productos WHERE categoria = 4";

  $result = mysqli_query($conexion, $query); // Ejecuta la consulta
  
  if ($result) {
    $counter = 0; // Contador para controlar la disposición de las tarjetas

    echo '<div class="row mt-3">'; // Inicia una fila

    // Iterar a través de los resultados y mostrar la información de cada producto
    while ($row = mysqli_fetch_assoc($result)) {
      $foto = $row['foto']; // Obtener la URL de la foto del producto
      $nombre = $row['nombre']; // Obtener el nombre del producto
      $precio = $row['precio']; // Obtener el precio del producto

      echo '<div class="col-3 mb-4">';
      echo '<div class="card">';
      echo '<img src="' . $foto . '" alt="' . $nombre . '">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $nombre . '</h5>';
      echo '<p class="card-text">Precio: $' . $precio . '</p>';
      echo '<div class="d-flex">';
      echo '<a href="#" class="btn btn-primary flex-row">Comprar ahora</a>';
      echo '<a href="#" class="btn btn-success flex-row">Agregar al carrito</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';

      $counter++; // Incrementa el contador

      // Si se han mostrado 4 productos, cierra la fila y abre una nueva
      if ($counter % 4 == 0) {
        echo '</div>'; // Cierra la fila actual
        echo '<div class="row mt-3">'; // Abre una nueva fila
      }
    }

    echo '</div>'; // Cierra la última fila

  }

  // Cierra la conexión a la base de datos
  mysqli_close($conexion);
?>

    <h2 class="mt-5">Vinílicas</h2>

    <?php
  // Configuración de la conexión a la base de datos
  $servidor = "localhost"; // Nombre o dirección IP del servidor MySQL
  $usuario = "root"; // Nombre de usuario de la base de datos
  $contrasena = ""; // Contraseña de la base de datos
  $basedatos = "exau5"; // Nombre de la base de datos
  
  // Establecer la conexión a la base de datos
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

  // Verificar si se pudo establecer la conexión
  if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
  }

  // Resto del código para obtener y mostrar los productos
  $query = "SELECT foto, nombre, precio FROM productos WHERE categoria = 0";

  $result = mysqli_query($conexion, $query); // Ejecuta la consulta
  
  if ($result) {
    $counter = 0; // Contador para controlar la disposición de las tarjetas

    echo '<div class="row mt-3">'; // Inicia una fila

    // Iterar a través de los resultados y mostrar la información de cada producto
    while ($row = mysqli_fetch_assoc($result)) {
      $foto = $row['foto']; // Obtener la URL de la foto del producto
      $nombre = $row['nombre']; // Obtener el nombre del producto
      $precio = $row['precio']; // Obtener el precio del producto

      echo '<div class="col-3 mb-4">';
      echo '<div class="card">';
      echo '<img src="' . $foto . '" alt="' . $nombre . '">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $nombre . '</h5>';
      echo '<p class="card-text">Precio: $' . $precio . '</p>';
      echo '<div class="d-flex">';
      echo '<a href="#" class="btn btn-primary flex-row">Comprar ahora</a>';
      echo '<a href="#" class="btn btn-success flex-row">Agregar al carrito</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';

      $counter++; // Incrementa el contador

      // Si se han mostrado 4 productos, cierra la fila y abre una nueva
      if ($counter % 4 == 0) {
        echo '</div>'; // Cierra la fila actual
        echo '<div class="row mt-3">'; // Abre una nueva fila
      }
    }

    echo '</div>'; // Cierra la última fila

  }

  // Cierra la conexión a la base de datos
  mysqli_close($conexion);
?>
  </div>
  

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <?php

include 'foot.php';
?>
</body>
</html>
