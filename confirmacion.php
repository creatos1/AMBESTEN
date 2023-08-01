<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['id'])) {
    // El usuario ha iniciado sesión, mostrar sus datos
    $nombreUsuario = $_SESSION['nombre_usuario'] ?? '';
    $nombreCompleto = $_SESSION['nombre_completo'] ?? '';
    $direccion = $_SESSION['direccion'] ?? '';
    $correoElectronico = $_SESSION['correo'] ?? '';
    $telefono = $_SESSION['telefono'] ?? '';
} else {
    // Redirigir al usuario a la página de inicio de sesión si no ha iniciado sesión
    header("Location: iniciosesion.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Aquí puedes incluir los estilos CSS que desees -->
  <title>Confirmación de Pedido</title>
</head>
<body>
    <h1>Pedido Realizado</h1>
    <p>Tu pedido ha sido procesado correctamente.</p>
    <p>Gracias por tu compra.</p>

    <!-- Aquí puedes mostrar los detalles del pedido -->
    <?php
    // Obtener los detalles del pedido desde la base de datos (asumiendo que los has guardado previamente)
    // Database configuration
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ambesten_db";

    // Establish database connection
    $conn = new mysqli($localhost, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SELECT para obtener los detalles del pedido confirmado desde la tabla "pedidos"
    $sql = "SELECT * FROM pedidos WHERE usuario_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $_SESSION['id']);
    $stmt->execute();
    $result = $stmt->get_result();

    // Mostrar los detalles del pedido confirmado
    if ($result->num_rows > 0) {
        echo "<h2>Detalles del Pedido Confirmado:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<p>Producto: " . $row['producto'] . "</p>";
            echo "<p>Color: " . $row['color'] . "</p>";
            echo "<p>Servicio: " . $row['servicio'] . "</p>";
            echo "<p>Medida: " . $row['medida'] . "</p>";
            echo "<p>Precio: " . $row['precio'] . "</p>";
            // Puedes mostrar más detalles si es necesario
        }
    } else {
        echo "<p>No se encontraron detalles de pedidos confirmados.</p>";
    }

    $stmt->close();
    $conn->close();
    ?>
</body>
</html>
