<?php
// Realiza cualquier validación necesaria de los datos recibidos

// Obtener los datos del pedido y del usuario desde el formulario
$productoSeleccionado = $_POST['producto'];
$colorSeleccionado = $_POST['color'];
$servicioSeleccionado = $_POST['servicio'];
$medidaSeleccionada = $_POST['medida'];
$precioSeleccionado = $_POST['precio'];
$nombreUsuario = $_POST['nombre_usuario'];
$nombreCompleto = $_POST['nombre_completo'];
$direccion = $_POST['direccion'];
$correoElectronico = $_POST['correo'];
$telefono = $_POST['telefono'];

// Realiza la conexión a la base de datos (reemplaza los valores con los de tu servidor)
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
}

// Insertar los datos del usuario en la tabla "usuarios"

// Obtener el ID del usuario recién registrado
$usuarioId = $conn->insert_id;

// Insertar los datos del pedido en la tabla "pedido"
$sqlPedido = "INSERT INTO pedidos (producto, color, medida, servicio, nombre, direccion, correo, telefono)
VALUES ('$productoSeleccionado', '$colorSeleccionado', '$medidaSeleccionada', '$servicioSeleccionado', '$nombreCompleto', '$direccion', '$correoElectronico', '$telefono')";

if ($conn->query($sqlPedido) === FALSE) {
    echo "Error al registrar el pedido: " . $conn->error;
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Aquí puedes incluir los estilos CSS que desees -->
  <title>Detalles del Producto y Usuario</title>
</head>
<body>
    
</body>
</html>

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
      <link rel="stylesheet" href="css/compra.css">
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
      <section>
      <section>
      <div class="container-main">
      <!-- Recuadro para las selecciones de las propiedades de las prendas -->
      <div class="selections-container">
         <img src="images/user.png" style="width:100px">
            <div>
                <div>
                    <section style="color:#fff">
                    <strong style="font-size:4em;"> <?php echo "PEDIDO REALIZADO CON ÉXITO"; ?></li> </strong>
    <p><?php echo "Estamos a la espera de tu transferencia a través de el número de tarjeta:" ?></p>
    <img src= "images/tarjeta.png"><br>
    <strong style="font-size:4em;"> <?php echo "Destalles del pedido"; ?></li> </strong><br>
    <p><?php echo "Producto: " . $productoSeleccionado; ?></p>
    <p><?php echo "Color: " . $colorSeleccionado;?> </p>
    <p><?php echo "Servicio: " . $servicioSeleccionado; ?> </p>
    <p><?php echo "Medida: " . $medidaSeleccionada; ?></p>
    <p><?php echo "Precio: " . $precioSeleccionado; ?></p>

    <strong style="font-size:4em;"><?php echo "Detalles del Usuario:"; ?></strong>
    <p><?php echo "Nombre de usuario: " . $nombreUsuario; ?></p>
    <p><?php echo "Nombre completo: " . $nombreCompleto; ?></p>
    <p><?php echo "Dirección: " . $direccion; ?></p>
    <p><?php echo "Correo electrónico: " . $correoElectronico; ?></p>
    <p><?php echo "Teléfono: " . $telefono; ?></p>
    <p><?php echo "Método de pago: HSBC"; ?></p>
    <p><?php echo "Número de tarjeta: 4213166130974920"; ?></p>

    <form action="procesar_registro.php" method="POST">
    </section>
    <br><br>
    
    <style>
  .custom-button {
    font-size: 17px;
    background: #ffffff;
    border: 2px solid #000000;
    color: #000000;
    padding: 15px 0px;
    width: 100%;
    max-width: 222px;
    text-align: center;
    border-radius: 30px;
  }
  .custom-button:hover{
    background: #000000;
     color: #ffffff !important;
     transition: ease-in all 0.2s;
     border:#fff
  }
</style>
<section>
        <a class="read_more" href="index.php">Volver al inicio</a>

</section>
    <br>



    </form>
                        
                    </h1>
                </div>
            </div>
        </div>
    </div>
    

        
      </section>

      <!-- end header inner -->
      <!-- end header -->
      <!-- about section -->

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

