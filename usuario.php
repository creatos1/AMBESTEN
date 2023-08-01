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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AMBESTEN</title>
  <meta name="keywords" content="AMBESTEN">
  <meta name="description" content="Venta y renta de trajes">
  <meta name="author" content="---">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- RESPONSIVE-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- BARRA DE MENÚ -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="stylesheet" href="css/compra.css"> <!-- Enlace al nuevo archivo CSS -->
</head>
 <!-- BODY -->
 <body class="main-layout">
   <!-- IMAGEN LOADER  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- fin de imagen loader -->
   <!-- header -->
   <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">INICIO</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">CONTACTO</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="productos.php">PRODUCTOS</a>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="cerrar_sesion.php">CERRAR SESION</a>
                              </li>
</li>
<li class="nav-item">
         <a class="nav-link" href="usuario.php"> <!-- Enlace a la página de perfil del usuario -->
            <i class="fa fa-user" aria-hidden="true"></i> <!-- Icono de usuario -->
         </a>
      </li>
                               <!-- FORMULARIO DE INICIO DE SESIÓN -->
<form action="login.php" method="post">
    <!-- Resto del código del formulario -->
</form>                        
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
            <section class="banner_main">
    <div class="container-main">
      <!-- Recuadro para las selecciones de las propiedades de las prendas -->
      <div class="selections-container">
         <img src="images/user.png" style="width:100px">
            <h1 style="color:#ffffff; font-size:4em">USUARIO</h1>
            <h1 style="color:#ffffff; font-size:3em">Datos personales:</h1>
            <div>
                <div>
                    <h1 style="color:#ffffff; font-size:2em">
                        <p>NOMBRE: <?php echo $nombreCompleto; ?></p>
                        <p>DIRECCIÓN: <?php echo $direccion; ?></p>
                        <p>CORREO ELECTRÓNICO: <?php echo $correoElectronico; ?></p>
                        <p>TELÉFONO: <?php echo $telefono; ?></p><br>
                        <a class="read_more" href="cerrar_sesion.php">CERRAR SESIÓN</a>
                    </h1>
                </div>
            </div>
        </div>
    </div>
  <!-- footer -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="https://www.google.com/maps/@21.5209516,-102.2402384,3a,90y,75.22h,82.67t/data=!3m7!1e1!3m5!1sRsiElP1SZXCpWiKjtqYQBQ!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DRsiElP1SZXCpWiKjtqYQBQ%26cb_client%3Dsearch.gws-prod.gps%26w%3D86%26h%3D86%26yaw%3D181.26553%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192?entry=ttu"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Calle Hidalgo #407, colonia Barrio del Rosario, Encarnación De Díaz, Jalisco.</li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +52 475-102-8865</li>
                        <li>
  <a href="mailto:rentayventadetrajesyvestidos.official@gmail.com">
    <i class="fa fa-envelope" aria-hidden="true"></i>
  </a>
  <br>
  rentayventadetrajesyvestidos.official@gmail.com
</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. Design by<a href="INDEX.php"> AMBESTEN TEAM</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </a>
      </footer>
      <!-- end footer -->
    <!-- Javascript files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_CLAVE_DE_API"></script>
    <script src="js/comprascript.js"></script>

</body>

</html>