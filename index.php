<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>X-TECH</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/categorias.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/logo.png" alt="circle image" class="img-fluid">
        <h1 class="sitename">X-TECH Chiquimula</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Inicio</a></li>
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

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/carrousel/1.png" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                <img src="assets/img/carrousel/3.png" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/carrousel/4.png" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                <img src="assets/img/carrousel/5.png" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <span class="section-subtitle" data-aos="fade-up">Bienvenidos a X-TECH</span>
            <h1 class="mb-4" data-aos="fade-up">
              X-TECH: Lo mejor en insumos médicos
            </h1>
            <p data-aos="fade-up">
              En X-TECH, somos su distribuidor de confianza en Guatemala para equipo médico de alta calidad. 
              Ofrecemos una amplia gama de soluciones en radiología, desde sistemas de mamografía digital y 
              máquinas de rayos X, hasta tomografía, ultrasonidos y densitometría ósea. Nuestra misión es brindar 
              tecnología avanzada que respalde a los profesionales de la salud, garantizando diagnósticos precisos y eficientes.
            </p>
            <p class="mt-5" data-aos="fade-up">
              <a href="#categorias" class="btn btn-get-started">Ver productos</a>
            </p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->



    <!-- About 2 Section
     
    <section id="about-2" class="about-2 section light-background">

      <div class="container">
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
              <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                <div class="img">
                  <img src="assets/img/img_v_3.jpg" alt="circle image" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
              <div class="px-3">
                <span class="content-subtitle">Our Mission</span>
                <h2 class="content-title text-start">
                  The Big Oxmox advised her not to do so, because there were
                  thousands.
                </h2>
                <p class="lead">
                  A small river named Duden flows by their place and supplies it
                  with the necessary regelialia. It is a paradisematic country.
                </p>
                <p class="mb-5">
                  The Big Oxmox advised her not to do so, because there were
                  thousands of bad Commas, wild Question Marks and devious Semikoli.
                </p>
                <p>
                  <a href="#" class="btn-get-started">Get Started</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> /About 2 Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center">
<!--
          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up">
              <div class="services-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h3>Technology</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>Web Design</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>Branding</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>
-->
        </div>
      </div>
    </section><!-- /Services Section -->





    <!-- Stats Section 
    <section id="stats" class="stats section light-background">

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-5">
            <div class="images-overlap">
              <img src="assets/img/img_v_1.jpg" alt="student" class="img-fluid img-1" data-aos="fade-up">
            </div>
          </div>

          <div class="col-lg-4 ps-lg-5">
            <span class="content-subtitle">Why Us</span>
            <h2 class="content-title">Far far away Behind the Word Mountains</h2>
            <p class="lead">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia.
            </p>
            <p class="mb-5">
              There live the blind texts. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.
            </p>
            <div class="row mb-5 count-numbers">

              Start Stats Item 
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="3919" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Coffee</span>
              </div>
               End Stats Item 

              Start Stats Item 
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="2831" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Codes</span>
              </div>
              End Stats Item

              Start Stats Item
              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="1914" data-purecounter-duration="1" class="purecounter number"></span>
                <span class="d-block">Projects</span>
              </div>
              End Stats Item

            </div>
          </div>

        </div>

      </div>
    </section> /Stats Section -->










    <!-- Blog Posts Section 
    <section id="categorias" class="categorias section">
      
      <div class="container section-title" data-aos="fade-up">
        <p>Nuestros Productos</p>
        <h2>Categorías</h2>
      </div>
      <div class="container">

        <div class="row gy-4">
          <div class="col-md-6 col-lg-4 divs-categorias">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="thumb d-block"><img src="assets/img/Categorias/Ultrasonido.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">

                </div>
                <h3><a href="#">Sistemas de Ultrasonido</a></h3>
                <p>
                  Los sistemas de ultrasonido utilizan ondas sonoras para crear 
                  imágenes del interior del cuerpo de manera segura y no invasiva.
                </p>

                <div class="d-flex author align-items-center">

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 divs-categorias">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="thumb d-block"><img src="assets/img/Categorias/Rayos X.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">

                </div>
                <h3><a href="#">Sistemas de Rayos X</a></h3>
                <p>
                  Los sistemas de rayos X utilizan radiación para obtener imágenes internas del cuerpo, 
                  siendo esenciales para el diagnóstico médico en áreas como la radiografía y la fluoroscopia.
                </p>

                <div class="d-flex author align-items-center">

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 divs-categorias">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="thumb d-block"><img src="assets/img/img_h_3.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">

                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 divs-categorias">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="thumb d-block"><img src="assets/img/img_h_3.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">

                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">

                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </section> /Blog Posts Section -->




    <section id="categorias" class="stats section" data-aos="fade-up">
      <div class="container section-title" data-aos="fade-up">
        <p>Nuestros Productos</p>
        <h2>Categorías</h2>
      </div>

      <div class="container mt-4">
        <div class="row">


<?php

          $archivoCSV = 'categorias/Categorias.csv'; // Ruta a tu archivo CSV
          
          // Abrir el archivo CSV
          if (($handle = fopen($archivoCSV, "r")) !== FALSE) {
              $html = '';

              //Leer y descartar la primera fila (los encabezados)
              fgetcsv($handle, 1000, ",");
          
              // Leer cada línea del archivo CSV
              while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                  if (count($data) >= 4) { // Asegurarse de que haya al menos cuatro columnas
                      list($titulo, $descripcion, $url, $imagen) = $data;
          
                      $html .= '<div class="col-md-4 mb-4">
                          <div class="product-card">
                              <a href="categorias/index.php?cat=' . htmlspecialchars($url) . '">
                                  <div class="div-image">
                                      <img src="assets/img/Categorias/' . htmlspecialchars($imagen) . '" alt="' . htmlspecialchars($titulo) . '">
                                  </div>
                              </a>
                              <div class="card-body">
                                  <div class="div-texto">
                                      <a href="categorias/index.php?cat=' . htmlspecialchars($url) . '">
                                          <h5 class="card-title">' . htmlspecialchars($titulo) . '</h5>
                                      </a>
                                      <p class="card-text">' . htmlspecialchars($descripcion) . '</p>
                                  </div>
                                  <a href="categorias/index.php?cat=' . htmlspecialchars($url) . '" class="btn btn-get-started">Ver categoría</a>
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
              <a href="categorias/ultrasonido.php">
                <div class="div-image">
                  <img src="assets/img/Categorias/Ultrasonido.jpg" alt="Producto 1">
                </div>
              </a>
              <div class="card-body">

                <div class="div-texto">

                  <a href="categorias/ultrasonido.php">
                    <h5 class="card-title">Sistemas de ultrasonido</h5>
                  </a>

                  <p class="card-text">Nuestros sistemas de rayos X son de la más alta calidad,
                    diseñados para ofrecer resultados precisos y confiables.</p>

                </div>

                <a href="categorias/ultrasonido.php" class="btn btn-get-started">Ver categoría</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="product-card">
              <a href="">
                <div class="div-image">
                  <img src="assets/img/Categorias/Rayos X.jpg" alt="Producto 1">
                </div>
              </a>
              <div class="card-body">

                <div class="div-texto">

                  <a href="">
                    <h5 class="card-title">Sistemas de Rayos X</h5>
                  </a>

                  <p class="card-text">Los sistemas de rayos X utilizan radiación para obtener imágenes internas del cuerpo,
                    siendo esenciales para el diagnóstico médico en áreas como la radiografía y la fluoroscopia.</p>

                </div>

                <a href="#categorias" class="btn btn-get-started">Ver categoría</a>
              </div>
            </div>
          </div>


          -->

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
        <p>© <span>Copyright</span> <strong class="px-1 sitename">X-TECH.</strong> <span>All Rights Reserved</span></p>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>