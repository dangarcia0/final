<!DOCTYPE html>
<html>
<?php
include 'head.php';
?>
<head>
  <title>Esmaltes</title>
  <!-- Agrega los enlaces a los archivos de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  

  <div class="container mt-3">
    <div class="card">
      <div class="card-body bg-purple text-white">
        <div class="row">
          <div class="col-2">
            <a href="vinilicas.php" class="text-black">Vinílicas</a>
          </div>
          <div class="col-2">
            <a href="esmaltes.php" class="text-black">Esmaltes</a>
          </div>
          <div class="col-2">
            <a href="aerosoles.php" class="text-black">Aerosoles</a>
          </div>
          <div class="col-2">
            <a href="texturasyefectos.php" class="text-black">Texturas y Efectos</a>
          </div>
          <div class="col-2">
            <a href="maderas.php" class="text-black">Maderas</a>
          </div>
          <div class="col-2">
            <a href="solventes.php" class="text-black">Solventes</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center ">
    <a href="productos.php" class="btn btn-primary">Ver todos los productos</a>
  </div>

  <h2 class="text-center mt-3" style="font-family: 'Arial', sans-serif; font-weight: bold;">Vinílicas</h2>




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


  <script>
    $(document).ready(function () {
      $('.carousel').carousel();
    });

    $('.carousel').carousel({
      pause: "hover"
    });
  </script>
  <?php
  include 'foot.php';
  ?>
</body>

</html>