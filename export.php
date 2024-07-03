<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Export</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Main Header File -->
    <?php include 'header.php'; ?>  

  <style>
    @media (min-width: 576px) {
        .container-custom {
            max-width: 540px;
        }
    }
    @media (min-width: 768px) {
        .container-custom {
            max-width: 740px; /* Increase the max-width for md and larger screens */
        }
    }
    @media (min-width: 992px) {
        .container-custom {
            max-width: 960px; /* Increase the max-width for lg and larger screens */
        }
    }
    @media (min-width: 1200px) {
        .container-custom {
            max-width: 2500px; /* Increase the max-width for xl and larger screens */
        }
    }

    .vertical-line {
        width: 1px;
        height: 100%;
        background-color: #000; /* Adjust the color as needed */
    }

    .image-title-container {
            text-align: center; /* Center the titles */
            margin-bottom: 20px; /* Space between items */
            flex: 1 0 18%; /* Adjust to fit five items in a row */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

    .image-title-container img {
        max-width: 200%; /* Ensure images are responsive */
    }

    .title {
        margin-top: 5px; /* Space between image and title */
        font-size: 14px; /* Adjust the font size as needed */
        color: #333; /* Adjust the text color as needed */
    }

    @media (max-width: 768px) {
        .vertical-line {
            display: none; /* Hide the vertical line on smaller screens */
        }

        .image-title-container {
            flex: 0 0 100%; /* Stack items on smaller screens */
        }
    }

    .team-member {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .pic {
            margin-bottom: 15px;
        }
        .pic img {
            max-width: 100%;
            height: auto;
        }
        .member-info {
            flex: 1;
        }
        .member-info h4 {
            margin-top: 10px;
            font-size: 18px;
        }
        .member-info span {
            display: block;
            font-size: 14px;
            margin-top: 5px;
        }
        .member-info p {
            margin-top: 10px;
        }
        .social {
            margin-top: 15px;
        }
        .social a {
            margin: 0 5px;
            color: #333;
        }

        .events-slider
        {
          margin-left:300px;
          max-height: 450px;
        }
        .pack-content img
        {
          width: 600px;
          height: 300px;
        }
        .team-member {
            margin-bottom: 40px;
        }

        .pic {
            margin-right: 20px;
        }

        .pic img {
            max-width: 100px;
            border-radius: 50%;
        }

        .member-info h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .member-info span {
            font-size: 14px;
            color: gray;
            display: block;
            margin-bottom: 10px;
        }

        .member-info p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .social a {
            margin-right: 10px;
        }
</style>

</head>

<body class="index-page">

  <main class="main">
    
    <!-- Hero Section -->
    <section id="careers-cover" class="careers-cover">
      <img src="assets/img/Slider-02.jpg" class="custom-image" style="height: 500px;">
    </section> 
    <!-- /Hero Section -->

    <!-- Faq 2 Section -->
    <div id="faq-2" class="faq-2 ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p class="main-title">
          With 35 years of experience in the pasta and milling industry, Milano for Food Industries has become a leading company in the field of pasta manufacturing using the
          latest technology and producing the best quality possible.
        </p>
      </div><!-- End Section Title -->

    </div><!-- /Faq 2 Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us" data-builder="section">

      <div class="container-md">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class=" px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class="main-title" ><strong>OUR EXPORT LINE</strong></h3>
              <p class="main-title">
                Our company offers the best products to our customers and clients
                regionally as well as globally, through our export brand Milano which meets
                all international standards and regulations and ensures the safety and
                quality of our products.
              </p>
            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/Vector Smart Object-containers.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>
      </div>

      <div class="container-md">
        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <h5 class="main-title">Walter White</h5>
              </div>
              <div class="member-info ml-3">
                <span class="main-title">Chief Executive Officer</span>
                <p class="main-title">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
              </div>
            </div>
          </div><!-- End Team Member -->
    
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <h5 class="main-title">Sarah Johnson</h5>
              </div>
              <div class="member-info ml-3">
                
                <span class="main-title">Product Manager</span>
                <p class="main-title">Aut maiores voluptates amet et quis praesentium qui senda para</p>
              </div>
            </div>
          </div><!-- End Team Member -->
    
        </div>
      </div>
    

  


    </section><!-- /Why Us Section -->
  
    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container-md" data-aos="zoom-in">

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
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services countries">

      <!-- Section Title -->
      <div class="container-md section-title">
        <h2 class="main-title">Countries We Export To</h2>
      </div><!-- End Section Title -->

      <div class="container-md">

        <div class="row ">

          <div class="col-xl-4 col-md-6 " >
            <div class="service-item ">
              <div class="icon"><img src="assets/img/USA.png" alt="Mission Icon"></div>
              <h4 class="main-title"><a href="service-details.html" class="stretched-link">GULF COUNTRIES</a></h4>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" >
            <div class="service-item ">
              <div class="icon"><img src="assets/img/Venezuela.png" alt="Mission Icon"></div>
              <h4 class="main-title"><a href="service-details.html" class="stretched-link">USA</a></h4>    
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6 " >
            <div class="service-item ">
              <div class="icon"><img src="assets/img/Uruguay.png" alt="Mission Icon"></div>
              <h4 class="main-title"><a href="service-details.html" class="stretched-link">SINGAPORE</a></h4>
            </div>
          </div><!-- End Service Item -->

          <!-- End Service Item -->

        </div>

        <br>

        <div class="row">

          <div class="col-xl-4 col-md-6 " >
            <div class="service-item ">
              <div class="icon"><img src="assets/img/USA.png" alt="Mission Icon"></div>
              <h4 class="main-title"><a href="service-details.html" class="stretched-link">GULF COUNTRIES</a></h4>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6 " >
            <div class="service-item ">
              <div class="icon"><img src="assets/img/Venezuela.png" alt="Mission Icon"></div>
              <h4 class="main-title"><a href="service-details.html" class="stretched-link">USA</a></h4>    
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6 " >
            <div class="service-item ">
              <div class="icon"><img src="assets/img/Uruguay.png" alt="Mission Icon"></div>
              <h4 class="main-title"><a href="service-details.html" class="stretched-link">SINGAPORE</a></h4>
            </div>
          </div><!-- End Service Item -->

          <!-- End Service Item -->

        </div>
 
      </div>

    </section><!-- /Services Section -->

  
  <section class="events">
      <h2 class="main-title">Events We Regularly Participate In</h2>
      <p class="main-title">We make sure we’re present in important FMCG events worldwide, such as Gulf
        <br>
        Food in Dubai, Anuga in 
        Germany, Foodex in Japan, SIAL in Paris, Food Fancy in the <br> USA, and FOOD AFRICA in Egypt.</p>

          <div  data-aos="fade-in">
            <div class="row events-slider">
              <div class="col-9">
                <div class="swiper sliderFeaturedPosts">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-01.jpg');"></a>
                    </div>
    
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-02.jpg');">
                      </a>
                    </div>
    
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-03.jpg');">
                      </a>
                    </div>
    
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-04.jpg');"></a>
                    </div>
    
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-05.png');"></a>
                    </div>
    
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-06.png');"></a>
                    </div>
    
                  </div>
                  <div class="custom-swiper-button-next">
                    <span class="bi-chevron-right"></span>
                  </div>
                  <div class="custom-swiper-button-prev">
                    <span class="bi-chevron-left"></span>
                  </div>
    
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
  
  </section>
  
  <section class="packs">
      <h2 class="main-title">Our Packs</h2>
      <div class="pack-content">
          <img src="assets/img/Royal.png" alt="Packs">
      </div>
  </section>
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