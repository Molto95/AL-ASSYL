<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact Us</title>
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

        .form-label 
        {
            display: flex;
            align-items: left;
        }
</style>

</head>

<body class="index-page">

  <main class="main">
    
    <!-- Hero Section -->
    <div id="careers-cover" class="careers-cover section_w_margin">
      <img src="assets/img/Slider-03.jpg" class="custom-image" style="height: 500px;">
      </div>  
    <!-- /Hero Section -->


    <!-- Contact Section -->

    <div id="contact" class="contact section_w_padding">


      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

        <div class="container mt-5">
          <div class="row">
            <!-- Info Section -->
            <div class="col-lg-7">
              <div class="info-wrap">
              <h6 style="text-align:left;">For business inquires, don't hesitate to contact us!</h6>
                <br>
                <div class="container ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div class="ml-3">
                          <p class="mt-2">Waterway: Executive Office</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div class="ml-3">
                          <p class="mt-2"><a class="main-title" href="https://www.google.com/maps?q=XFFW+2J2+Milano+for+food+industries+HQ,+Industrial+Area,+New+Cairo+3,+Cairo+Governorate+4716148&ftid=0x1458239c1679539b:0x995a0556377c6afa&hl=en-EG&gl=eg&entry=gps&g_ep=CAISBjYuMTQuMhgAQgJFRw%3D%3D&shorturl=1">HQ Location: Milano for food industries HQ</a></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div class="ml-3">
                          <p class="mt-2"><a class="main-title" href="https://www.google.com/maps/place/30%C2%B053'04.9%22N+31%C2%B028'14.2%22E/@30.8846944,31.4706111,17z/data=!3m1!4b1!4m4!3m3!8m2!3d30.8846944!4d31.4706111?hl=en&entry=ttu">Mansoura</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div class="ml-3">
                          <p class="mt-2"><a class="main-title" href="https://www.google.com/maps/place/Wadi+el+Nil+Mills/@30.8451483,29.6081527,16z/data=!4m6!3m5!1s0x145f632a7f596e59:0x4d22e6ccaacc465f!8m2!3d30.8463909!4d29.6055658!16s%2Fg%2F11fk3xxt4p?hl=enEG&entry=ttu">Borg El Arab</a></p>
                        </div>
                      </div> 
                    </div>
                    <div class="info-item d-flex mb-10" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div class="ml-3">
                        <p class="mt-2">+20 222 5722 922</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div class="ml-3">
                        <p class="mt-2">info@alassyl.com.eg</p>
                        </div>
                    </div><!-- End Info Item -->
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Map Section -->
            <div class="col-lg-5">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.2405201247993!2d31.496509500000002!3d29.972517000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458239c1679539b%3A0x995a0556377c6afa!2sMilano%20for%20food%20industries%20HQ!5e0!3m2!1sen!2seg!4v1720121624180!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
          </div>
        </div>

        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <h4 class="text-center mb-4">Contact Support</h4>

                <!-- Name Field -->
                <div class="form-group row justify-content-center mb-4">
                  <label for="name-field" class="col-sm-2 col-form-label text-sm-right">Your Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="name" id="name-field" class="form-control" required>
                  </div>
                </div>

                <!-- Email Field -->
                <div class="form-group row justify-content-center mb-4">
                  <label for="email-field" class="col-sm-2 col-form-label text-sm-right">Your Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" id="email-field" required>
                  </div>
                </div>

                <!-- Phone Field -->
                <div class="form-group row justify-content-center mb-4">
                  <label for="phone-field" class="col-sm-2 col-form-label text-sm-right">Phone Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="phone" id="phone-field" class="form-control" required>
                  </div>
                </div>

                <!-- Company Field -->
                <div class="form-group row justify-content-center mb-4">
                  <label for="company-field" class="col-sm-2 col-form-label text-sm-right">Your Company</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="company" id="company-field" required>
                  </div>
                </div>

                <!-- Subject Field -->
                <div class="form-group row justify-content-center mb-4">
                  <label for="subject-field" class="col-sm-2 col-form-label text-sm-right">Subject</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="subject" id="subject-field" required>
                  </div>
                </div>

                <!-- Message Field -->
                <div class="form-group row justify-content-center mb-4">
                  <label for="message-field" class="col-sm-2 col-form-label text-sm-right">Your Questions</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="message" rows="5" id="message-field" required></textarea>
                  </div>
                </div>

                <div class="text-center mt-4">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>



        </div>

      </div>

              </div><!-- /Contact Section -->
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