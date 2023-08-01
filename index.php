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
      <meta name="viewport" content="width=device-width, initial-scale=0.5">
      <meta name="viewport" content="initial-scale=1, maximum-scale=0.5">
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
      <!-- Enlaces para Font Awesome -->


      
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
         </div>
      </header>
      
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->

      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="text-bg">
               <a style="color:#ffffff; font-size:2em">BIENVENIDO(A): </a>      
               <p style="color:#ffffff; font-size:1.5em"><?php echo $nombreCompleto; ?></p><br>

                  <!-- CARRUSEL IMAGENES -->
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                        <h1 style="color:#ffffff">SACO</h1>
                           <figure><img src="images/about_img.png" width="250px"/></figure>
                           <a class="comprar" href="saco.PHP">Comprar ahora</a>
                        </div>
                     </div>
                  </div>
               </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="text-bg">
                        <h1 style="color:#ffffff"> PANTALÓN</h1>
                        <figure><img src="images/s2.png" width="190px"/></figure>
                        <a class="comprar" href="pantalon.PHP">Comprar ahora</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="text-bg">
                        <h1 style="color:#ffffff">CORBATAS</h1>
                        <figure><img src="images/s3.png" width="153px"/></figure>
                        <a class="comprar" href="corbata.PHP">Comprar ahora</a>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/s4.png" class="moving-image" ></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2 style="color:#ffffff">ACERCA DE NOSOTROS</h2>
                     <p>Nosotros somos una empresa encargada de hacerte lucir tal como eres, expresarte ante la sociedad a través de las prendas que nosotros tenemos para ti. Tenemos una gran variedad de ropa, un gran catálogo para demostrar que la elegancia importa.</p>
                  </div>
                  <a class="read_more" href="about.php">Más información</a>
               </div>
            </div>
         </div>
      </div>
   </body>
      <!-- about section -->
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
               <div class="col-md-12">
                  <a class="read_more" href="productos.php">VER PRODUCTOS</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->

      <!-- end Our shop section -->

     
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
      <script src="https://maps.googleapis.com/maps/api/js?key=TU_CLAVE_DE_API"></script>
   </body>
</html>

