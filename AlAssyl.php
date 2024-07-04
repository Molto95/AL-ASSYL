<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AL ASSYL</title>
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
</style>

</head>

<body class="index-page">

  <main class="main">
    
    <!-- Hero Section -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-01.jpg');">
                    <div class="img-bg-inner">
                      <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-02.jpg');">
                    <div class="img-bg-inner">
                      <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-03.jpg');">
                    <div class="img-bg-inner">
                      <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-04.jpg');">
                    <div class="img-bg-inner">
                      <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-05.png');">
                    <div class="img-bg-inner">
                      <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/Slider-06.png');">
                    <div class="img-bg-inner">
                      <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
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

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

          <div class="container" data-aos="fade-up" data-aos-delay="100">


                  <div class="testimonial-item">
                   
                    <h3>Saul Goodman</h3>
            
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
            

          </div>

        </section><!-- /Testimonials Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
          <h2>RANGE</h2>
      </div><!-- End Section Title -->

      <div class="container-custom">
          <div class="row">
              <!-- First Section -->
              <div class="col-md-5">
                
                    <img src="assets/img/team/team-1.jpg" style="width:150px; height: 150px;" alt="Walter White">
                
                  <div class="d-flex justify-content-around align-items-start flex-wrap">
                      <div class="image-title-container">
                          <img src="assets/img/Flour/01.png" alt="KHEDIWE" class="img-fluid1">
                          <div class="title">KHEDIWE</div>
                      </div>
                      <div class="image-title-container">
                          <img src="assets/img/Flour/02.png" alt="SAYYAD ELWADI" class="img-fluid">
                          <div class="title">SAYYAD ELWADI</div>
                      </div>
                      <div class="image-title-container">
                          <img src="assets/img/Flour/03.png" alt="SUPER ASSIL" class="img-fluid">
                          <div class="title">SUPER ASSIL</div>
                      </div>
                      <div class="image-title-container">
                          <img src="assets/img/Flour/04.png" alt="IBN ELNIL" class="img-fluid">
                          <div class="title">IBN ELNIL</div>
                      </div>
                      <div class="image-title-container">
                          <img src="assets/img/Flour/05.png" alt="NOGOUM AL ASSYL" class="img-fluid">
                          <div class="title">NOGOUM AL ASSYL</div>
                      </div>
                  </div>
              </div>
      
              <!-- Vertical Line -->
              <div class="col-md-2 d-flex justify-content-center align-items-center">
                  <div class="vertical-line"></div>
              </div>

              <!-- Second Section -->
              <div class="col-md-5">
                <img src="assets/img/team/team-1.jpg" style="width:150px; height: 150px;" alt="Walter White">
                  <div class="d-flex justify-content-around align-items-start flex-wrap">
                      <div class="image-title-container">
                          <img src="assets/img/PASTA/Gawaher_.png" alt="MILANO" class="img-fluid">
                          <div class="title">MILANO</div>
                      </div>
                      <div class="image-title-container">
                          <img src="assets/img/PASTA/Gawaher_.png" alt="ROYAL" class="img-fluid">
                          <div class="title">ROYAL</div>
                      </div>
                      <div class="image-title-container">
                          <img src="assets/img/PASTA/Gawaher_.png" alt="GAWAHER" class="img-fluid">
                          <div class="title">GAWAHER</div>
                      </div>
                      <div class="image-title-container">
                          <img src="assets/img/PASTA/Gawaher_.png" alt="GAWAHER 10Kg" class="img-fluid">
                          <div class="title">GAWAHER 10Kg</div>
                      </div>
                      <div class="image-title-container">
                          <img src="assets/img/PASTA/Gawaher_.png" alt="AL ASSYL" class="img-fluid">
                          <div class="title">AL ASSYL</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </section>
    <!-- /Services Section -->

       <!-- Team Section -->
   <section id="team" class="team section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="pic">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="Walter White">
                    </div>

                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member">
                    <div class="pic">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="Sarah Jhonson">
                    </div>

                </div>
            </div><!-- End Team Member -->

        </div>

    </div>

  </section><!-- /Team Section -->

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