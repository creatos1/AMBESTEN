<?php
// Datos de conexión a la base de datos
$host = "localhost"; // Cambia si es necesario
$user = "root"; // Cambia si es necesario
$password = ""; // Cambia si es necesario
$dbname = "ambesten_db"; // Cambia si es necesario

// Establecer la conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>