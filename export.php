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
          width: 550px;
          height: 450px;
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

        .info {
          display: flex;
          flex-direction: column;
          justify-content: center;
        }
        
        .countries-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px; /* Adjust gap as needed */
          }

          .country {
            text-align: center;
          }

          .testimonial-brand {
            max-width: 100%;
            height: auto;
          }

          .export-mission {
            display: flex;
            align-items: flex-start;
          }

          .info {
            margin-left: 1rem;
          }

          .carousel-item {
            height: 500px;
            background-size: cover;
            background-position: center;
        }

</style>

</head>

<body class="index-page">

  <main class="main">
    
    <!-- Hero Section -->
    <div id="careers-cover" class="careers-cover section_w_padding">
      <img src="assets/img/Slider-02.jpg" class="custom-image" style="height: 500px;">
      </div> 
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

    <div class="container-md" >
      <div class="row gy-4 align-items-center justify-content-center">
        <!-- Title Section -->
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
          <h4 class="main-title"><strong>OUR EXPORT LINE</strong></h4>
          <p class="main-title">
            Our company offers the best products to our customers and clients
            regionally as well as globally, through our export brand Milano which meets
            all international standards and regulations and ensures the safety and
            quality of our products.
          </p>
        </div>
        
        <!-- Image Section -->
        <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="100">
          <img src="assets/img/Vector Smart Object-containers.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

      <br><br>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="export-mission d-flex align-items-start">
              <div class="pic">
                <img src="assets/img/mission.png"  style="max-width:80px;" class="img-fluid" alt="">
              </div>
              <div class="info ms-3">
                <span class="main-title d-block align-left" ><strong>MISSION</strong></span>
                <p class="main-description align-left ">
                Building bonds, forging connections. We're all about delivering unmatched customer
                value and fostering strong relationships with our network. From suppliers to partners
                employees to consumers, we're dedicated to finding the best solutions at the most affordable prices.
                </p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="export-mission d-flex align-items-start">
              <div class="pic">
                <img src="assets/img/vision.png" style="max-width:80px;" class="img-fluid" alt="">
              </div>
              <div class="info ms-3">
                <span class="main-title d-block align-left"><strong>VISION</strong></span>
                <p class="main-description  align-left">
                Our vision is to become a leading force in the industry within the next 5 years. Join us
                on this journey as we bring quality, innovation, and authentic flavors to your table.
                </p>
              </div>
            </div>
          </div><!-- End Team Member -->
        </div>
      </div>

        </section>

    


    <!-- Testimonials Section -->
    <section id="brands" class="brands section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <h3 class="main-title">OUR BRANDS</h3>
          <p class="main-title">Milano, Sanremo, SanMatteo, Sibilia, Felecia, Alda, Royal, and more.</p>
      
            <div class="brands-grid">
            <div class="brand">
              <img src="assets/img/Brands/mi_logo_2x.png" class="brand-logo" alt="Milano">
            </div>
            <div class="brand">
              <img src="assets/img/Brands/00.png" class="brand-logo" alt="Sanremo">
            </div>
            <div class="brand">
              <img src="assets/img/Brands/5678.png" class="brand-logo" alt="">
            </div>
            <div class="brand">
              <img src="assets/img/Brands/9888.png" class="brand-logo" alt="">
            </div>
            <div class="brand">
              <img src="assets/img/Brands/77667676.png" class="brand-logo" alt="">
            </div>
            <div class="brand">
              <img src="assets/img/Brands/Untitled-2.png" class="brand-logo" alt="">
            </div>
              <br><br>
            </div>

            <p class="main-title">We offer a wide range of high-quality pasta for private labels differing in shapes, sizes, and colors to suit
            all requirements.</p>

            </div><!-- End testimonial item -->

      </div>

    </section><!-- /Testimonials Section -->
    
       <!-- Team Section -->
    <div id="team" class="team section_w_margin">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <h3 class="main-title">COUNTRIES WE EXPORT TO:</h3>
            <p class="main-title">We export to all countries in the world, including Japan, the USA, Singapore, Uruguay, Venezuela, Gulf
            countries, and African countries.</p><br>
        
            <div class="testimonial-item">
              <div class="countries-grid">
                <div class="country">
                  <img src="assets/img/Countries/01.png" class="testimonial-brand" alt="Gulf Countries">
                  <p>Gulf Countries</p>
                </div>
                <div class="country">
                  <img src="assets/img/Countries/05.png" class="testimonial-brand" alt="USA">
                  <p>USA</p>
                </div>
                <div class="country">
                  <img src="assets/img/Countries/03.png" class="testimonial-brand" alt="Japan">
                  <p>Japan</p>
                </div>
                <div class="country">
                  <img src="assets/img/Countries/02.png" class="testimonial-brand" alt="African Countries">
                  <p>African Countries</p>
                </div>
                <div class="country">
                  <img src="assets/img/Countries/Singapore.png" class="testimonial-brand" alt="Singapore">
                  <p>Singapore</p>
                </div>
                <div class="country">
                  <img src="assets/img/Countries/04.png" class="testimonial-brand" alt="Venezuela">
                  <p>Venezuela</p>
                </div>
              </div>
            </div>


          </div>

        
    </div><!-- /Team Section -->
  
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
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Event-Slider.jpg');"></a>
                    </div>
    
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Event-Slider.jpg');">
                      </a>
                    </div>
    
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/services.jpg');">
                      </a>
                    </div>
    
                    <div class="swiper-slide">
                      <a class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-04.jpg');"></a>
                    </div>
    
                  </div>
                  <div class="custom-swiper-button-next">
                    <span class="bi-chevron-right"></span>
                  </div>
                  <div class="custom-swiper-button-prev">
                    <span class="bi-chevron-left"></span>

                  </div>
                </div>
              </div>
      
      </section>
      
      <section class="carousel_wrapper" data-name="Carousel">
      <h2 class="main-title">Our Packs</h2>
      <div class="carousel slide" data-interval="10000" id="myCarousel" style="background-image: none;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
            <!-- Replace image URLs below with your own images -->
            <div class="carousel-item active" style="background-image: url('assets/img/Golf\ food.png');">
                <div class="container"></div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/PASTA/Ranges-Milano.png');">
                <div class="container"></div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/PASTA/Ranges-Royal.png');">
                <div class="container"></div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/PASTA/Ranges-Gawaher.png');">
                <div class="container"></div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/PASTA/Ranges-AlAssyl.png');">
                <div class="container"></div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/PASTA/Ranges-AhmedElSayyad.png');">
                <div class="container"></div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/PASTA/Ranges-Gawaher10Kg.png');">
                <div class="container"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
      // Initialize the carousel
      $('.carousel').carousel({
          interval: 5000 // Adjust the interval as needed
      });
  </script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>