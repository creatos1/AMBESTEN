<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ambesten_db";

    $conn = new mysqli($localhost, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $nombreusuario = $_POST["nombre"];
    $contrasena = $_POST["pass"];
    $username = $_POST["username"];
    $direccion = $_POST["direccion"];
    $correos = $_POST["correos"];
    $telefono = $_POST["telefono"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre_usuario, nombre_completo, direccion, correo, telefono, contrasena) VALUES ('$username', '$nombreusuario' , '$direccion' , '$correos', '$telefono','$contrasena')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir al usuario a la página de registro exitoso
        header("Location:iniciosesion.html");
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
