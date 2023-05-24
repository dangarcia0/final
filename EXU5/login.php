<?php
session_start();
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $contrasena = $_POST['contrasena'];

  $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email AND contrasena = :contrasena");
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':contrasena', $contrasena);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    // Autenticación exitosa, guardar información en la sesión
    $_SESSION['email'] = $email;
    echo "Inicio de sesión exitoso. Redireccionando...";
    header('Location:inicio.php');
    exit();
  } else {
    echo "Correo electrónico o contraseña incorrectos.";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<?php

include 'head.php';
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #fce4ec;
    }
    .container {
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="awacontainer">
    <h1 class="text-center">Iniciar sesión</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3">
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
        <?php if (isset($error)): ?>
          <div class="alert alert-danger mt-3" role="alert">
            <?php echo $error; ?>
          </div>
        <?php endif; ?>
        <hr>
        <p class="text-center">¿No tienes una cuenta? <a href="registro.php">Registrarse</a></p>
      </div>
    </div>
  </div>

<?php

include 'foot.php';
?>
</body>
</html>
