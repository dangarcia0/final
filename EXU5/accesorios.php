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
    <h2 class="mt-5">Brochas</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/1b.jpg" class="card-img-top" alt="Ropa 1">
          <div class="card-body">
            <h5 class="card-title">AZUL CIELO</h5>
            <p class="card-text">De Pintucato® Antiviral y Antibacterial</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/2b.jpg" class="card-img-top" alt="Ropa 2">
          <div class="card-body">
            <h5 class="card-title">ROSA</h5>
            <p class="card-text">De Pintucato® Antiviral y Antibacteria.</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/3b.jpg" class="card-img-top" alt="Ropa 3">
          <div class="card-body">
            <h5 class="card-title">AMARILLO</h5>
            <p class="card-text">De Pintucato® Antiviral y Antibacteria</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>



    <h2 class="mt-5">Proteccion</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/1a.jpg" class="card-img-top" alt="Ropa 1">
          <div class="card-body">
            <h5 class="card-title">CUBREBOCAS</h5>
            <p class="card-text">Respirador de alto rendimiento contra partícula y polvos. </p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/2a.jpg" class="card-img-top" alt="Ropa 2">
          <div class="card-body">
            <h5 class="card-title">MASCARILLA</h5>
            <p class="card-text">Brinda protección adicional contra factores externos del medio ambiente...</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/3a.jpg" class="card-img-top" alt="Ropa 3">
          <div class="card-body">
            <h5 class="card-title">DESINFECTANTE</h5>
            <p class="card-text">Ideal para todo tipo de espacios, superficies de trabajo, muebles y objetos personales</p>
            <button class="btn btn-primary btn-block">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>

 
      <!-- Agrega más productos de la categoría de electrónica aquí -->
    </div>
  </div>
  

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <?php

include 'foot.php';
?>
</body>
</html>
