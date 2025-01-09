<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AM Consultancy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <?php
    include_once("top_menu.php");
  ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <!--<div class="company-badge mb-4">
                <i class="bi bi-gear-fill me-2"></i>
                Working for your success
              </div>-->

              <h1 class="mb-4">
              Trusted Immigration Consultants in UAE <br>
                <!--<span class="accent-text">Vestibulum Ante</span>-->
              </h1>

              <p class="mb-4 mb-md-5">
              AM Consultancy Immigration Management is one of the leading Licensed Immigration companies located in Dubai, UAE. We at AM Consultancy have a perfect blend of certified and experienced professionals who can help ambitious and skilled individuals to achieve their dreams of flying to their ideal locations with distinction, competence, and effective strategies.
              </p>

              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">WhatsApp</a>
                <!--<a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                  <i class="bi bi-play-circle me-1"></i>
                  Play Video
                </a>-->
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/consult.png" alt="Hero Image" class="img-fluid" style='border-radius:50px;'>

              <!--<div class="customers-badge">
                <div class="customer-avatars">
                  <img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
                  <img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
                  <img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
                  <img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
                  <img src="assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
                  <span class="avatar more">12+</span>
                </div>
                <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
              </div>-->
            </div>
          </div>
        </div>

        <?php
          //include_once("home_section.php");
        ?>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <?php include_once("home_about.php"); ?>
    
    <!-- /About Section -->

    <!-- Features Section -->
     <?php include("home_features.php"); ?>
    <!-- /Features Section -->

    <!-- Features Cards Section -->
     <?php include("home_features_card.php"); ?>
    <!-- /Features Cards Section -->

    <!-- Features 2 Section -->
     <?php //include_once("home_features_section.php"); ?>
    <!-- /Features 2 Section -->

    <!-- Call To Action Section -->
     <?php //include_once("home_calltoaction.php"); ?>
    <!-- /Call To Action Section -->

    <!-- Clients Section -->
     <?php //include("home_client_section.php"); ?>
    <!-- /Clients Section -->

    <!-- Testimonials Section -->
     <?php //include_once("home_testimonials.php"); ?>
    <!-- /Testimonials Section -->

    <!-- Stats Section -->
     <?php //include_once("home_stats.php"); ?>
    <!-- /Stats Section -->

    <!-- Services Section -->
     <?php //include_once("home_services.php"); ?>
    <!-- /Services Section -->

    <!-- Pricing Section -->
     <?php //include_once("home_pricing.php"); ?>
    <!-- /Pricing Section -->

    <!-- Faq Section -->
      <?php //include_once("home_faq.php"); ?>
    <!-- /Faq Section -->

    <!-- Call To Action 2 Section -->
      <?php //include("home_calltoaction_2.php"); ?>
    <!-- /Call To Action 2 Section -->

    <!-- Contact Section -->
      <?php include_once("home_contact.php"); ?>
    <!-- /Contact Section -->

  </main>

  <?php
    include_once("footer.php");
  ?>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>