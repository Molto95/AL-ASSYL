<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Capabilities</title>
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

            table {
                width: 100%;
                border-collapse: collapse;
            }

            .capabilities
            {
            
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the container */
            padding: 20px; /* Add some padding */
            background-color: #f9f9f9; /* Background color for the container */
            border: 1px solid #ddd; /* Border for the container */
            border-radius: 8px; /* Rounded corners for the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add some shadow for depth */

            }

            .main-title {
                color: #001522;
                text-align: left;
            }
    </style>

</head>

<body class="index-page">

  <main class="main">
    
    <!-- Hero Section -->
    <div id="careers-cover" class="careers-cover section_w_margin">
      <img src="assets/img/20230620_150748.png" class="custom-image" style="height: 500px;">
    </div>  
    <!-- /Hero Section -->

    <!-- Skills Section -->
    <div id="skills" class="skills section_w_padding">
        <div class="container capabilites">
            <table class="main-title">
                <tr>
                    <th colspan="2"><b>AL ASSYL GROUP CAPACITY:</b></th>
                </tr>
                <tr>
                    <td class="center"><b><u>Mills:</u></b></td>
                    <td class="center"><b><u>Pasta factories:</u></b></td>
                </tr >
                <tr>
                    <td class="left">
                    - Modern Wadi El-nil.
                    <br>
                    - Al Assyl Group-2<br><br>
                    
                    <b><u>With total capacity 1100 Tons Per Day</u></b>
    
                    </td>
                    <td class="left">
                    - Sayadeen pasta factory.
                    <br>
                    - Milano pasta factory.
                    <br><br>
                    <b><u>With total production 400 Tons Per Day</u></b>
                    </td>
                </tr>
            </table>
        </div>
     
        <div class="container " data-aos="fade-up" data-aos-delay="100">
            <div class="row">

                <div class="col-lg-6 d-flex align-items-center">
                    <img src="assets/img/map.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 m-top-60 ">

                    <h5 class="main-title" style="font-weight: bold;">LOCATIONS OF BRANCHES AND DISTRIBUTORS </h5>
                    <br/>
                    <p class="main-title">
                    Al Assyl is one of the top Egyptian industrial manufacturers, 
                    with a wide range of products that meet high standards for 
                    quality and excellence.
                    <br/><br/>
                    Its focus on innovation has led to the development of many 
                    products that have become regionally renowned.
                    <br/><br/>
                    With over 26 points of sale split between branches and 
                    distributors across Cairo, Alexandria, Red Sea, and other 
                    cities, Al Assil has a total headcount of 189 salespersons.    </p>


                </div>
            </div>
        </div>
    </div><!-- /Skills Section -->

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