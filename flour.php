<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Flour</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
  <!-- Main Header File -->
  <?php include 'header.php'; ?>

</head>

<body class="index-page">

  <main class="main">
    
    <!-- Hero Section -->
    <section id="careers-cover" class="careers-cover">
      <img src="assets/img/cta-bg.jpg" class="custom-image" style="height: 500px;">
    </section>  
    <!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="zoom-in">

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
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/flour/01.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/flour/02.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/flour/03.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/flour/04.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/flour/05.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/flour/01.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/flour/02.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/flour/03.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

            <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">


              <div class="testimonial-item">
                <img src="assets/img/flour/02.png" class="testimonial-img" alt="">
                <h3>HISTORY/POSITIONING</h3>

                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>After proving successful as a pasta manufacturing 
                    company, Al Assil expanded its portfolio of business by 
                    acquiring a number of flour mills that produce various 
                    types of flour for various purposes</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
        

      </div>

    </section><!-- /Testimonials Section -->
    
  </main> 
  
   <!-- Main Footer File -->
   <?php include 'footer.php'; ?> 
  
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script> 

</body>

</html>