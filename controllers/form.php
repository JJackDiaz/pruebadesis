<?php

//conexion DB
include '../config/conexion.php';

$conn = conectar();

// Verificar si la solicitud fue realizada utilizando el método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $como[]= [];

    $nombre = $_POST['nombre'];
    $alias = $_POST['alias'];
    $rut = $_POST['rut'];
    $email = $_POST['email'];
    $region = $_POST['region'];
    $comuna = $_POST['comuna'];
    $candidato = $_POST['candidato'];
    $como = $_POST['como'];
    $como_serialize = serialize($como);

    // print_r($_POST['como']);
    // exit;
    
    // Insertar los datos en la base de datos
    $stmt = $conn->prepare('INSERT INTO votacion (nombre_apellido,alias,rut,email,id_region,id_comuna,id_candidato,difusion) VALUES (:nombre,:alias,:rut,:email,:region,:comuna,:candidato,:difusion)');
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':alias', $alias);
    $stmt->bindParam(':rut', $rut);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':region', $region);
    $stmt->bindParam(':comuna', $comuna);
    $stmt->bindParam(':candidato', $candidato);
    $stmt->bindParam(':difusion', $como_serialize);

    if ($stmt->execute()) {
        return "guardado";
    } else {
        echo "error";
    }

}else {
    print_r("no paso nada");
    exit;
}

?>



