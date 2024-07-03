<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About us</title>
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
            max-width: 50%;
            height: auto;
            margin-left: 20px;
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
        <img src="assets/img/cta-bg.jpg" class="custom-image" style="height: 500px;">
      </section>  
      <!-- /Hero Section -->

    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>ALASSIL FOOD COMPANY</h2>
        <p>Al Assil Egypt is a leading producer and exporter of durum wheat.
            <br>
            The company was 
            established as a family business in 1980 when Al-Assil acquired his first mill for grinding 
            grain in El Senbellawein,<br> a small agricultural town near Mansoura.
            <br><br>
            Al-Assil continues to be a driving force in the world of the food industry,<br> and now, in its 
            fourth generation, the company provides durum wheat products across the globe.
            </p>
      </div><!-- End Section Title -->



    </section><!-- /Faq 2 Section -->


   <!-- Team Section -->
   <section id="team" class="team section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member">
                    <div class="pic">
                        <img src="assets/img/mission.png" class="img-fluid" alt="Sarah Jhonson">
                    </div>
                    <div class="member-info">
                        <h4>MISSION</h4>
                        <p><B>Building bonds, forging connections. We're all about delivering unmatched customer
                            value and fostering strong relationships with our network. From suppliers to partners
                            employees to consumers, we're dedicated to finding the best solutions at the most affordable prices.</B></p>

                    </div>
                </div>
            </div><!-- End Team Member -->

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="pic">
                        <img src="assets/img/vision.png" class="img-fluid" alt="Walter White">
                    </div>
                    <div class="member-info">
                        <h4>VISION</h4>
                        <p><B>Our vision is to become a leading force in the industry within the next 5 years. Join us
                            on this journey as we bring quality, innovation, and authentic flavors to your table.</B></p>
                    </div>
                </div>
            </div><!-- End Team Member -->

        </div>

    </div>

  </section><!-- /Team Section -->


  <div class="container history-container">
    <h1>Our History</h1>
    <div class="timeline">
        <!-- First Row with single right item -->
        <div class="timeline-row single-item">
            <div class="timeline-year single-year">
                <p>1988</p>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    <img src="assets/img/Sayyad Logo02-02-02.png" alt="Pasta Image 2">
                    <p>Al Assyl pasta factory was established.</p>
                </div>
            </div>
        </div>

        <!-- Row with items on both sides -->
        <div class="timeline-row">
            <div class="timeline-year">
                <p>1997</p>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    
                </div>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    <img src="assets/img/lOGO 03.png" alt="Pasta Image 2">
                    <p>Al Assyl mill.</p>
                </div>
            </div>
        </div>

        <div class="timeline-row">
            <div class="timeline-year">
                <p>2002</p>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    <img src="assets/img/lOGO 03.png" alt="Pasta Image 3">
                    <p>Al Assyl mill 2.</p>    
                </div>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="timeline-row">
            <div class="timeline-item right">
                <div class="content-timeline">
                    
                </div>
            </div>
            <div class="timeline-year">
                <p>2003</p>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    <img src="assets/img/About Us/lOGO 04.png" alt="Pasta Image 4">
                    <p><B>El Sayadeen</B> Pasta Factory.</p>
                </div>
            </div>
        </div>

        <div class="timeline-row">
            <div class="timeline-year">
                <p>2008</p>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    <img src="assets/img/About Us/lOGO 01.png" alt="Pasta Image 3">
                    <p>Acquisition of <B>Wadi EL Nil</B> Mills.</p>    
                </div>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    
                </div>
            </div>
        </div>

        <div class="timeline-row">
            <div class="timeline-item right">
                <div class="content-timeline">
                    
                </div>
            </div>
            <div class="timeline-year">
                <p>2013</p>
            </div>
            <div class="timeline-item right">
                <div class="content-timeline">
                    <img src="assets/img/About Us/lOGO 05.png" alt="Pasta Image 4">
                    <p><B>Milano</B> Pasta Factory.</p>
                </div>
            </div>
        </div>
    </div>
</div>

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