<?php

require_once 'conexion.php';




$mensaje = ''; // Variable para almacenar el mensaje de alerta




if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $nombre = $_POST['nombre'];

  $apellidos = $_POST['apellidos'];

  $email = $_POST['email'];
  $contrasena = $_POST['contrasena'];

  $confirmar_contrasena = $_POST['confirmar_contrasena'];

  $fecha_nacimiento = $_POST['fecha_nacimiento'];

  $direccion = $_POST['direccion'];

  $sexo = $_POST['sexo'];




  // Verificar si el usuario ya existe en la base de datos

  $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");

  $stmt->bindParam(':email', $email);

  $stmt->execute();




  if ($stmt->rowCount() > 0) {

    $mensaje = "El usuario ya está registrado.";

  } else {

    // Verificar que la contraseña y la confirmación de contraseña coincidan

    if ($contrasena === $confirmar_contrasena) {

      // Insertar el nuevo usuario en la base de datos

      $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellidos, email, contrasena, fecha_nacimiento, direccion, sexo) VALUES (:nombre, :apellidos, :email, :contrasena, :fecha_nacimiento, :direccion, :sexo)");

      $stmt->bindParam(':nombre', $nombre);

      $stmt->bindParam(':apellidos', $apellidos);

      $stmt->bindParam(':email', $email);

      $stmt->bindParam(':contrasena', $contrasena);

      $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);

      $stmt->bindParam(':direccion', $direccion);

      $stmt->bindParam(':sexo', $sexo);

      $stmt->execute();




      $mensaje = "Registro exitoso.";

    } else {
      $mensaje = "La contraseña y la confirmación de contraseña no coinciden.";

    }

  }

}

?>




<!DOCTYPE html>

<html lang="es">

<head>

  <?php include 'head.php'; ?>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Registrarse</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css" />
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

    <h1 class="text-center">Registrarse</h1>

    <div class="row">

      <div class="col-md-6 offset-md-3">

        <form action="registro.php" method="POST">

          <div class="alert alert-info <?php echo !empty($mensaje) ? 'd-block' : 'd-none'; ?>" role="alert">

            <?php echo $mensaje; ?>

          </div>

          <div class="form-group">

            <label for="nombre">Nombre</label>

            <input type="text" class="form-control" id="nombre" name="nombre" required>

          </div>

          <div class="form-group">

            <label for="apellidos">Apellidos</label>

            <input type="text" class="form-control" id="apellidos" name="apellidos" required>

          </div>

          <div class="form-group">

            <label for="email">Correo electrónico</label>

            <input type="email" class="form-control" id="email" name="email" required>

          </div>

          <div class="form-group">

            <label for="password">Contraseña</label>

            <input type="password" class="form-control" id="password" name="contrasena" required
              onchange="validarContrasena()">

          </div>

          <div class="form-group">

            <label for="confirm-password">Confirmar Contraseña</label>

            <input type="password" class="form-control" id="confirm-password" name="confirmar_contrasena" required>
          </div>

          <div class="form-group">

            <label for="fecha_nacimiento">Fecha de Nacimiento</label>

            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>

          </div>

          <div class="form-group">

            <label for="direccion">Dirección</label>

            <input type="text" class="form-control" id="direccion" name="direccion" required>
          </div>
          <div class="form-group">

            <label for="sexo">Sexo</label>

            <select class="form-control" id="sexo" name="sexo" required>
              <option value="masculino">Masculino</option>
              <option value="femenino">Femenino</option>

            </select>

          </div>

          <button type="submit" class="btn btn-primary btn-block" id="btn-enviar" style="display">Registrarse</button>

        </form>

        <hr>

        <p class="text-center">¿Ya tienes una cuenta? <a href="index.php">Iniciar sesión</a></p>
      </div>
    </div>

  </div>


  <?php include 'foot.php'; ?>

  <script src="JS/script-validacion.js"></script>

</body>

</html>