<?php
$host = 'localhost';
$dbName = 'exau5';
$username = 'root';
$contrasena = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $contrasena);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error de conexión: " . $e->getMessage());
}
?>
