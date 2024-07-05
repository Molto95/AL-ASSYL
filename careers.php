<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Careers</title>
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
    <section id="careers-cover" class="careers-cover ">
      <img src="assets/img/Slider-04.jpg" class="custom-image" style="height: 500px;">
      </section>  
    <!-- /Hero Section -->

       <!-- Services Section -->
       <div id="services" class="services section_w_padding">

        <!-- Section Title -->

        <div class="container-md section-title" data-aos="fade-up">
          <h3 class="main-title"><strong>JOIN AL ASSYL GROUP TEAM</strong></h3>
          <p>Our greatest asset is our human capital. Furthermore, our aim is to create an organization with a culuture that cares for the employees, promotes their performance, and makes them feel different and proud. we take advantage of every job opportunity to acquire only the most talented and experienced individuals who fit into our culture and core values.</p>
          <br>
          If you want to be part of Al Assyl Group team, apply for one of the vacancies below ...
        </div><!-- End Section Title -->

        <div class="container section-title" data-aos="fade-up">
          <h2 class="second-title">Careers</h2>
          
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-xl-4 col-md-6 " data-aos="fade-up" data-aos-delay="100" >
              <div class="service-item position-relative">
                <h4 class="main-title"><a href="career-details-executive-assistant.php" class="stretched-link">EXECUTIVE ASSISTANT</a></h4>
                <p class="main-title">8 JUN 2023</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-4 col-md-6 " data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <h4 class="main-title"><a href="career-details-financial-accountant.php" class="stretched-link">FINANCIAL ACCOUNTANT</a></h4>
                <p class="main-title">10 MAY 2023</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-4 col-md-6 " data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <h4 class="main-title"><a href="career-details-export-officer.php" class="stretched-link">EXPORT OFFICER</a></h4>
                <p class="main-title">13 MAR 2023</p>
              </div>
            </div><!-- End Service Item -->
  
          </div>
          <br>
        </div>
  
      </div><!-- /Services Section -->
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