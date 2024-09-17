<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Detalle de producto</title>
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
        <h1 class="sitename">X-TECH Chiquimula</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.php" class="active">Inicio</a></li>
          <!--
          <li><a href="about.html">Acerca</a></li>
          <li><a href="services.html">Servicio</a></li>
          <li><a href="portfolio.html">Portafolio</a></li>
          <li><a href="team.html">Equipo</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        -->
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>


  <?php
          header('Content-Type: text/html; charset=utf-8');
          $archivoCSV = "DetalleProductos.csv";
          $idProducto = $_GET["id"];
          
          // Abrir el archivo CSV
          if (($handle = fopen($archivoCSV, "r")) !== FALSE) {
              $html = '';
          
              // Leer cada línea del archivo CSV
              while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                  if (count($data) >= 14) { // Asegurarse de que haya al menos cuatro columnas
                    list($id, $nombre, $descripcioncorta, $fabricante, $pais, $documento, $video1, $video2, $imagen1, $imagen2, $imagen3, $imagen4, $imagen5, $categoria, $detalles) = $data;
                    if ($id == $idProducto) {
                        break; // Salir del bucle una vez encontrado el producto
                    }else{
                        list($id, $nombre, $descripcioncorta, $fabricante, $pais, $documento, $video1, $video2, $imagen1, $imagen2, $imagen3, $imagen4, $imagen5, $categoria, $detalles) = null;
                    }
                  }
              }
          
              // Cerrar el archivo CSV
              fclose($handle);
          } else {
              echo 'No se pudo abrir el archivo CSV.';
          }
          ?>




  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1><?php echo $nombre; ?></h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="../index.php">Categorias</a></li>
            <li><a href="index.php?cat=<?php echo $categoria; ?>"><?php echo $categoria; ?></a></li>
            <li class="current"><?php echo $nombre; ?></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <div class="flex-container">

          <div class="flex-item-left">
            <img src="../assets/img/Productos/<?php echo $imagen1; ?>" alt="Product Image" class="product-image">
          </div>

          <div class="flex-item-right">
              <div class="product-info">
                <h3 class="product-title"><?php echo $nombre; ?></h3>
                <p class="product-description">
                    <?php echo $descripcioncorta; ?>
                </p>
                <!--
                <div class="product-price">$99.99</div>
                <button class="btn btn-primary buy-btn">Buy Now</button>
                -->
            </div>
          </div>

          <div class="flex-item-down">
            <!--
            <div class="product-details mt-3">
                <h5>Product Details:</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et.</p>
            </div>
            -->
          </div>

        </div>


        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
                <?php echo $detalles; ?>
                <br>
              
                <?php if (!empty($video1)): ?>
                  <video class="video" controls>
                  <source src="../assets/img/videos/<?php echo $video1; ?>" type="video/mp4">
                  Tu navegador no soporta la etiqueta de video.
                  </video>
                <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Información adicional</h3>
              <ul>
                <li><strong>Fabricante</strong> <?php echo $fabricante; ?></li>
                <li><strong>Pais</strong> <?php echo $pais; ?></li>
                <!--<li><strong>Project date</strong> 01 March, 2020</li>-->
                
                <?php
                  if (!empty($documento) && file_exists("../assets/pdf/" . $documento)) {
                    echo '<li><strong>Especificaciones técnicas</strong> 
                    <a href="../assets/pdf/' . $documento . '" target="_blank">
                            <img class="iconopdf" src="../assets/img/pdf.png" alt="">
                            ' . $documento . '
                          </a>';
                  }
                  ?>
                </li>
                <li><a target="_blank" href="https://wa.me/50249420101?text=Hola, vi el producto <?php echo $nombre; ?> en su página web 
                y estoy interesado en obtener más información. 
                ¿Podrían proporcionarme detalles adicionales?
                <?php echo $nombre; ?>
                " class="btn-visit align-self-start">Cotizar</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">Acerca de nosotros</h3>
            <p class="mb-4">
              En X-TECH, nos especializamos en la venta de equipos médicos avanzados, 
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
          Diseñado por <a href="">X-TECH</a>
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