<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Milano</title>
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

        .section_w_padding {
        /* padding: 40px 20px; */
        text-align: center;
        color: var(--default-color);
        background-color: white;
  
        scroll-margin-top: 88px;
        overflow: clip;
        }

</style>

</head>

<body class="index-page">

  <main class="main">
    
    <!-- Hero Section -->
    <div id="careers-cover" class="careers-cover section_w_padding">
      <img src="assets/img/Flour page/Flour Range.png" class="custom-image" style="height: 500px;">
      </div>  
    <!-- /Hero Section -->

    <!-- Testimonials Section -->
    <div id="testimonials" class="testimonials  section_w_padding">

      <div class="container" data-aos="fade-up" data-aos-delay="100">


              <div class="testimonial-item">
                
                <h3>History / Positioning</h3>
        
                <p style="line-height: 30px;">
              
                  <span>A high-quality pasta made of semolina, offering superior<br> taste and texture with 
                    convenient packaging to fit the needs of aspiring mainstream consumers.</span>
        
                </p>
              </div>
            </div><!-- End testimonial item -->
        

      </div>

      </div><!-- /Testimonials Section -->

    <!-- Services Section -->
    <div id="services" class="services section_w_padding">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
          <h2>RANGE</h2>
      </div><!-- End Section Title -->

      <div class="container">
          <div class="row">
            <!-- First Section -->
            <div class="col-md-12 centered-content">
              <img src="assets/img/team/team-1.jpg" style="width:150px; height: 150px;" alt="Walter White">
              <h6 class="mt-3">350 gm</h6>
            </div>
          </div>
          <div class="row mt-4">
            <!-- Table Section -->
            <div class="col-md-12">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>
                      <img style="width:50px;height:50px;" src="assets/img/PASTA/1.png" alt="Logo 1">
                      <h6>Penna</h6>
                    </td>
                    <td>
                      <img style="width:50px;height:50px;" src="assets/img/PASTA/2.png" src="assets/img/logo2.png" alt="Logo 2">
                      <h6>Penna</h6>
                    </td>
                    <td>
                      <img style="width:50px;height:50px;" src="assets/img/PASTA/2.png" src="assets/img/logo3.png" alt="Logo 3">
                      <h6>Penna</h6>
                    </td>
                    <td>
                      <img style="width:50px;height:50px;" src="assets/img/PASTA/3.png" src="assets/img/logo4.png" alt="Logo 4">
                      <h6>Penna</h6>
                    </td>
                    <td>
                      <img  style="width:50px;height:50px;" src="assets/img/PASTA/4.png" src="assets/img/logo5.png" alt="Logo 5">
                      <h6>Penna</h6>
                    </td>
                    <td>
                      <img style="width:50px;height:50px;" src="assets/img/PASTA/5.png" src="assets/img/logo6.png" alt="Logo 6">
                      <h6>Penna</h6>
                    </td>
                    <td>
                      <img style="width:50px;height:50px;" src="assets/img/PASTA/6.png" src="assets/img/logo7.png" alt="Logo 7">
                      <h6>Penna</h6>
                    </td>
                    <td>
                      <img style="width:50px;height:50px;" src="assets/img/PASTA/7.png" src="assets/img/logo8.png" alt="Logo 8">
                      <h6>Penna</h6>
                    </td>
                    <td>
                      <img src="assets/img/logo9.png" alt="Logo 9">
                      <h6>Penna</h6>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>

      <div class="container">
          <div class="row">
            <!-- First Section -->
            <div class="col-md-12 centered-content">
              <h3>Specifications</h3>
              <img src="assets/img/team/team-1.jpg" style="width:150px; height: 150px;" alt="Walter White">
              <h6 class="mt-3">350 gm</h6>
            </div>
          </div>
    </div>
      </div>
    <!-- /Services Section -->

      <br>
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