<?php
function conectar() {
  $host = 'localhost';
  $dbname = 'votacion';
  $username = 'root';
  $password = '';
  $opciones = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

  try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password,$opciones);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
  } catch(PDOException $e) {
      echo 'Error de conexión: ' . $e->getMessage();
      return null;
  }
}
?>
