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
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>sungla</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout position_head">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
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
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2 style="color:#ffffff">Nuestros productos</h2>
                     <p style="color:#ffffff">Te presentamos el catálogo que nosotros te ofrecemos para lucir tu estilo único.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass1.png" class="moving-image1" href="www.google.com"/></figure>
                     <h3><span class="blu">$</span>75.99 MXN</h3>
                     <p style="font-size:2em">TIRANTE</p>
                     <br><a class="comprar" href="tirante.php">Comprar ahora</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass2.png" class="moving-image1"/></figure>
                     <h3><span class="blu">$</span>499.99 MXN</h3>
                     <p style="font-size:2em">SACO</p>
                     <br><a class="comprar" href="saco.php">Comprar ahora</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass3.png"  class="moving-image1"/></figure>
                     <h3><span class="blu">$</span>149.99 MXN</h3>
                     <p style="font-size:2em">CAMISA</p>
                     <br><a class="comprar" href="camisa.php">Comprar ahora</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass4.png"  class="moving-image1"/></figure>
                     <h3><span class="blu">$</span>99.99 MXN</h3>
                     <p style="font-size:2em">CORBATA</p>
                     <br><a class="comprar" href="corbata.PHP">Comprar ahora</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass5.png"  class="moving-image1"/></figure>
                     <h3><span class="blu">$</span>399.99 MXN</h3>
                     <p style="font-size:2em">CHALECO</p>
                     <br><a class="comprar" href="chaleco.php">Comprar ahora</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass6.png"  class="moving-image1"/></figure>
                     <h3><span class="blu">$</span>89.99 MXN</h3>
                     <p style="font-size:2em">MOÑO</p>
                     <br><a class="comprar" href="mono.PHP">Comprar ahora</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass7.png"  class="moving-image1"/></figure>
                     <h3><span class="blu">$</span>399.99 MXN</h3>
                     <p style="font-size:2em">PANTALÓN</p>
                     <br><a class="comprar" href="pantalon.php">Comprar ahora</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/glass8.png"  class="moving-image1"/></figure>
                     <h3><span class="blu">$</span>759.99 MXN</h3>
                     <p style="font-size:2em">VESTIDO</p>
                     <br><a class="comprar" href="vestido.php">Comprar ahora</a>
                  </div>
               </div>
            </div>
      <!-- end Our  Glasses section -->
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
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

