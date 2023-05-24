<!DOCTYPE html>
<html lang="es">
<?php

include 'head.php';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <!-- Agregar los estilos de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css" />
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="css/style.css">
 
</head>
<body>
  <div class="awacontainer">
    <h1 class="text-center">Iniciar sesión</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <!-- Formulario de inicio de sesión -->
        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="contrasena" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
        </form>
        <hr>
        <p class="text-center">¿No tienes una cuenta? <a href="registro.php">Registrarse</a></p>
      </div>
    </div>
  </div>
  <?php
// Procesar la solicitud de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos enviados desde el formulario
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Realizar la validación de inicio de sesión (aquí puedes agregar tu lógica personalizada)
  if ($email === 'usuario@example.com' && $password === 'contrasena') {
    // Inicio de sesión exitoso, redireccionar al usuario a una página de bienvenida
    header('Location: inicio.php');
    exit();
  } else {
    // Credenciales incorrectas, mostrar un mensaje de error
    $error = 'Correo electrónico o contraseña incorrectos.';
  }
}
?>

<?php

include 'foot.php';
?>
</body>
</html>
