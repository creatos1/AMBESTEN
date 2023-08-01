<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

   // Obtener las credenciales del formulario
   $correo = $_POST['correo'];
   $contrasena = $_POST['contrasena'];

   // Consultar la base de datos para verificar las credenciales
   $consulta = "SELECT id, correo, contrasena, nombre_usuario, nombre_completo, direccion, telefono FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
   $resultado = mysqli_query($conn, $consulta);

   // Verificar si la consulta fue exitosa
   if ($resultado !== false) {
      if (mysqli_num_rows($resultado) == 1) {
         // Las credenciales son correctas, iniciar sesión
         session_start();
         $usuario = mysqli_fetch_assoc($resultado);
         $_SESSION['correo'] = $usuario['correo'];
         $_SESSION['contrasena'] = $usuario['contrasena'];

         // Redirigir al usuario a la página de inicio después de iniciar sesión
         header("Location: index.php");
         exit(); // Asegúrate de salir del script después de la redirección
      } else {
         // Credenciales incorrectas, mostrar mensaje de error
         echo "Correo o contraseña incorrectos";
      }
   } else {
      // Error en la consulta, mostrar mensaje de error
      echo "Error en la consulta: " . mysqli_error($conn);
   }

   // Cerrar la conexión a la base de datos
   mysqli_close($conn);
}
?>
