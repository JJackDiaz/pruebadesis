<?php

//conexion DB
include '../config/conexion.php';

$conn = conectar();

$stmt = "";
// Ejecutar una consulta preparada con parámetros
$stmt = $conn->prepare("SELECT id, nombre, apellido FROM candidato");
$stmt->execute();

// Recuperar los resultados de la consulta en un array asociativo
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolver los resultados como un JSON
echo json_encode($resultado);

$conn = null;

?>
