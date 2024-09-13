<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sistemas de ultrasonido</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="../assets/css/categorias.css" rel="stylesheet">

  <link href="../assets/css/productos.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="../index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="../assets/img/logo.png" alt="circle image" class="img-fluid">
        <h1 class="sitename">X-Tech Chiquimula</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.php" class="active">Inicio</a></li>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Sistemas de Ultrasonido</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="../index.php#categorias">Categorias</a></li>
            <li class="current"><?php echo $_GET["cat"]; ?></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->



    <section id="categorias" class="stats section" data-aos="fade-up">

      <div class="container mt-4">
        <div class="row">

        


        <?php
          header('Content-Type: text/html; charset=utf-8');
          #$archivoCSV = 'productos-ultrasonido.csv'; // Ruta a tu archivo CSV

          $archivoCSV = $_GET["cat"] . ".csv";
          
          // Abrir el archivo CSV
          if (($handle = fopen($archivoCSV, "r")) !== FALSE) {
              $html = '';

              //Leer y descartar la primera fila (los encabezados)
              fgetcsv($handle, 1000, ",");
          
              // Leer cada línea del archivo CSV
              while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                  if (count($data) >= 4) { // Asegurarse de que haya al menos cuatro columnas
                      list($id, $imagen, $titulo, $descripcion) = $data;
          
                      $html .= '<div class="col-md-4 mb-4">
                          <div class="product-card">
                              <a href="producto.php?id=' . htmlspecialchars($id) . '">
                                  <div class="div-image">
                                      <img src="../assets/img/Productos/' . htmlspecialchars($imagen) . '" alt="' . htmlspecialchars($titulo) . '">
                                  </div>
                              </a>
                              <div class="card-body">
                                  <div class="div-texto">
                                      <a href="producto.php?id=' . htmlspecialchars($id) . '">
                                          <h5 class="card-title">' . htmlspecialchars($titulo) . '</h5>
                                      </a>
                                      <p class="card-text">' . htmlspecialchars($descripcion) . '</p>
                                  </div>
                                  <a href="producto.php?id=' . htmlspecialchars($id) . '" class="btn btn-get-started">Ver producto</a>
                              </div>
                          </div>
                      </div>';
                  }
              }
          
              // Cerrar el archivo CSV
              fclose($handle);
          
              // Imprimir el HTML generado
              echo $html;
          } else {
              echo 'No se pudo abrir el archivo CSV.';
          }
          ?>




        <!-- 
          <div class="col-md-4 mb-4">
            <div class="product-card">
              <a href="">
                <div class="div-image">
                  <img src="../assets/img/Productos/DUS-5000 Plus.jpg" alt="Producto 1">
                </div>
              </a>
              <div class="card-body">

                <div class="div-texto">

                  <a href="">
                    <h5 class="card-title">Sistema de Ultrasonido DUS-5000 Plus</h5>
                  </a>

                  <p class="card-text">
                    Tecnologías poderosas para ser tu asistente portátil de confianza. El Sistema de Imagenología 
                    de Diagnóstico por Ultrasonido Digital Avanzado® DUS-500 Plus es un impresionante sistema de ultrasonido compacto, 
                    que ofrece un valor excepcional y la mejor calidad en toda la gama de aplicaciones, con soporte mejorado para PW/CW, 
                    imágenes de flujo Doppler en color, imágenes Doppler de potencia e imágenes Doppler de onda pulsada para cumplir con 
                    los requisitos de diagnóstico más exigentes.
                  </p>

                </div>

                <a href="categorias/ultrasonido.html" class="btn btn-get-started">Ver producto</a>
              </div>
            </div>
          </div>-->
          <!-- Agrega más tarjetas de producto aquí -->
        </div>
      </div>
    </section>
      


  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">Acerca de nosotros</h3>
            <p class="mb-4">
              En X-Tech, nos especializamos en la venta de equipos médicos avanzados, 
              incluyendo rayos X, ultrasonido, Doppler, rayos X portátil y radiografía 
              digital. Nuestro objetivo es proporcionar tecnología de alta calidad y 
              un excelente servicio al cliente para mejorar la precisión y eficiencia 
              en el diagnóstico médico.
            </p>
            <p class="mb-0">
              <a href="#" class="btn-learn-more">Mas información</a>
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
          <!--
          <div class="widget">
            <h3 class="widget-heading">Navigation</h3>
            <ul class="list-unstyled float-start me-5">
              <li><a href="#">Overview</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Find Buyers</a></li>
            </ul>
            <ul class="list-unstyled float-start">
              <li><a href="#">Overview</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
            </ul>
          </div>
           -->
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">
          <!--
          <div class="widget">
            <h3 class="widget-heading">Recent Posts</h3>
            <ul class="list-unstyled footer-blog-entry">
              <li>
                <span class="d-block date">May 3, 2020</span>
                <a href="#">There live the Blind Texts</a>
              </li>
              <li>
                <span class="d-block date">May 3, 2020</span>
                <a href="#">Separated they live in Bookmarksgrove right</a>
              </li>
            </ul>
          </div>
           -->
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">
          <div class="widget">
            <h3 class="widget-heading">Redes sociales</h3>
            <ul class="list-unstyled social-icons light mb-3">
              <li>
                <a href="#"><span class="bi bi-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-twitter-x"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-linkedin"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-google"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-google-play"></span></a>
              </li>
            </ul>
          </div>

          <div class="widget">
            <div class="footer-subscribe">
              <h3 class="widget-heading">Suscribirse</h3>
              <form action="forms/newsletter.php" method="post" class="php-email-form">
                <div class="mb-2">
                  <input type="text" class="form-control" name="email" placeholder="Ingresa tu correo electrónico">

                  <button type="submit" class="btn btn-link">
                    <span class="bi bi-arrow-right"></span>
                  </button>
                </div>
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Su solicitud de suscripción ha sido enviada. ¡Gracias!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Diseñado por <a href="">X-Tech</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>