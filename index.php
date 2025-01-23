<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5 Mobile Menu</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="assets/animate/animate.min.css" rel="stylesheet">

  <!-- bootstrap icons library -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet" crossorigin="anonymous">

</head>
<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm fw-bold text-success" style="color:#ff5722 ;">
  <div class="container-fluid">
    <button id="menu-toggle" class="btn btn-outline-primary d-lg-none ">
      <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand fw-bold align-items-center d-flex" href="#">
      <img src="assets/images/logo.png " alt="Logo" class="me-2 navbar-brand-img ps-2 ">
      <span class="text-success fs-3 custom-font lh-1">
        <div class="fs-1 site-main-name-font">NB CARE</div>
        <div class="fs-5 text-center site-sub-name-color">NEW BEGINNINGS BRISTOL LIMITED</div>
      </span>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link font-color-change" href="#" id="home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="#" id="aboutUs">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="#" id="aboutUs">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="#">OUR HOMES</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle font-color-change" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            OUR CARE
          </a>
          <ul class="dropdown-menu sub-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">NURSING CARE</a></li>
            <li><a class="dropdown-item" href="#">DEMENTIA CARE</a></li>
            <li><a class="dropdown-item" href="#">RESIDENTIAL CARE</a></li>
            <li><a class="dropdown-item" href="#">RESPITE CARE</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle font-color-change" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            OUR PEOPLE
          </a>
          <ul class="dropdown-menu sub-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">CAREERS</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link font-color-change" href="#">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="#">CONTACT US</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Mobile Navigation -->
<div id="mobile-nav" class="mobile-nav position-fixed top-0 start-0 h-100 bg-white shadow-lg p-4 w-75">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold">My Website</h5>
    <button id="close-nav" class="btn btn-outline-secondary">
      <i class="fas fa-times"></i>
    </button>
  </div>
  <ul class="nav flex-column">
    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="#" id="aboutUsBtn">About Us</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
  </ul>
</div>

<!-- Overlay -->
<div id="overlay" class="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>

<!-- Main Content -->
<main>

</main>
<!-- footer -->
<!-- <footer> -->
    <!-- <div class="container-fluid sub-bg-color text-light mt-5" id="contact">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center sub-menu h-100 p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0">
                                <img class="footer-brand-img" src="assets/images/logo.png" alt="Image">
                            </h1>
                        </a>
                        <p class="mt-3 mb-4 site-main-name-font fs-5">
                            We empower small and medium-scale businesses to develop customized software solutions, empowering them to navigate the competitive market successfully.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-12 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt site-main-name-font me-2"></i>
                                <p class="mb-0">51 Broad Street<br>Staple Hill,<br>Bristol,<br>BS16 5LS</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open site-main-name-font me-2"></i>
                                <p class="mb-0">info@newbeginningsbristol.co.uk</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone site-main-name-font me-2"></i>
                                <p class="mb-0">01174 220304| 01174 220345</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn custom-btn btn-square me-2" target="_blank" rel="noopener noreferrer" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn custom-btn btn-square me-2" target="_blank" rel="noopener noreferrer" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn custom-btn btn-square me-2" target="_blank" rel="noopener noreferrer" href="#"><i class="fab fa-youtube fw-normal"></i></a>
                                <a class="btn custom-btn btn-square" target="_blank" rel="noopener noreferrer" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Column for Google Map -->
                <!-- <div class="col-lg-4 col-md-12">
                    <div class="map-container" style="height: 400px; overflow: hidden; border-radius: 8px;">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=51+Broad+Street,Staple+Hill,Bristol,BS16+5LS" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white " href="https://etronicsolutions.com/">etronicsolutions.com</a>. All Rights Reserved. <span id="year"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Logo and Social Media -->
                <div class="col-lg-3 col-md-6">
                    <div class="logo">
                        <img src="assets/images/logo.png" alt="Logo">
                        <span>NB CARE</span>
                    </div>
                    <p class="mt-3">Copyright 2020 DesigningMedia.<br>All Rights Reserved</p>
                    <div class="social-icons mt-3">
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Pinterest"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>

                <!-- Useful Links -->
                <div class="col-lg-3 col-md-6">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Coming Soon</a></li>
                        <li><a href="#">404 Page</a></li>
                        <li><a href="#">FAQ Page</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <h5>Contact Info</h5>
                    <div class="contact-info">
                        <p><strong>Address:</strong><br>121 King Street, Melbourne,<br>3000, Australia</p>
                        <p><strong>Email:</strong><br><a href="mailto:info@sencare.com">info@sencare.com</a></p>
                        <p><strong>Phone:</strong><br>+1 23 45 6789</p>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="col-lg-3 col-md-6">
                    <h5>Instagram</h5>
                    <div class="instagram-grid">
                        <img src="placeholder1.jpg" alt="Instagram 1">
                        <img src="placeholder2.jpg" alt="Instagram 2">
                        <img src="placeholder3.jpg" alt="Instagram 3">
                        <img src="placeholder4.jpg" alt="Instagram 4">
                        <img src="placeholder5.jpg" alt="Instagram 5">
                        <img src="placeholder6.jpg" alt="Instagram 6">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
<!-- Footer End -->


<script src="assets/js/default-loader.js" crossorigin="anonymous"></script>
<script src="assets/js/custom.js" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>

</html>