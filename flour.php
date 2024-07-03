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
      max-width: 150%; /* Ensure images are responsive */
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
    <section id="careers-cover" class="careers-cover">
      <img src="assets/img/Flour page/Flour Range.png" class="custom-image" style="height: 500px;">
    </section>  
    <!-- /Hero Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
              <div class="testimonial-item">
                <img src="assets/img/Flour page/016.png" class="testimonial-img" alt="">
                <img src="assets/img/flour/05.png" class="testimonial-img" alt="">
                <img src="assets/img/flour/01.png" class="testimonial-img" alt="">
                <img src="assets/img/flour/02.png" class="testimonial-img" alt="">
                <img src="assets/img/Flour page/05.png" class="testimonial-img" alt="">
                <img src="assets/img/flour/03.png" class="testimonial-img" alt="">
                <br><br>
                <h3>HISTORY/POSITIONING</h3>

                <p> After proving successful as a pasta manufacturing 
                    company, Al Assil expanded its portfolio of business by 
                    acquiring a number of flour mills that produce various 
                    types of flour for various purposes
                </p>

              </div>

              <img src="assets/img/Flour page/Vector Smart Object.png" class="testimonial-img" alt=""> 
              <br><br>

              <p> A high-quality flour obtained from high-quality Australian, American Spring wheat (15.3 protein), serving the bakery segment with superior
              functionality delivering premium baking outputs </p>
              <p><b>High Quality Australian, American Spring wheat</b></p>
              <p><b>15.3gm protein</b></p>
              <br>

              <img src="assets/img/Flour page/01.png" class="testimonial-img" alt=""> 
              <br><br>

              <p> An excellent quality flour obtained from Russian, Ukrainian wheat (12.5 protein), also serving the regular bakeries segment with extra convenient
              functionality delivering great bakery outputs </p>
              <p><b>Russian, Ukrainian wheat</b></p>
              <p><b>12.5gm protein</b></p>
              <br>

              <img src="assets/img/Flour page/0363.png" class="testimonial-img" alt=""> 
              <br><br>

              <p>A good quality flour obtained from Russian, Ukrainian wheat (11.5 protein), serving several wide sectors such as Pasta, biscuits ... etc. with a good
              functionality, serving the mentioned sectors and delivering very good quality.</p>
              <p><b>Russian, Ukrainian wheat</b></p>
              <p><b>11.5gm protein</b></p>

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