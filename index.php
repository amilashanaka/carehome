<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5 Mobile Menu</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <link href="assets/css/custom.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body class="bg-light ">
  <!-- Main Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm fw-bold text-success" style="background-color: #e3f2fd">
    <div class="container-fluid">
      <button id="menu-toggle" class="btn btn-outline-primary d-lg-none">
        <i class="fas fa-bars"></i>
      </button>
      <a class="navbar-brand fw-bold align-items-center d-flex" href="#">
        <img src="assets/images/logo.png" alt="Logo" class="me-2 navbar-brand-img ">
        <span class="text-success fs-3 custom-font" style="line-height: 1;">
          <div>Care</div>
          <div>Home</div>
        </span>
      </a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link " href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">OUR HOMES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">OUR PEOPLE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT US</a>
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
      <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    </ul>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>

  <!-- Main Content -->
  <img src="assets/images/backImg.jpg" class="w-100">
  <div class="w-100 h-box position-relative">
    <div class="fs-1 text-success border-bottom">Our People</div>
    <!-- <div class="text-end position-absolute" style="top: 0; right: 0; transform: translateY(-100%);">
    <button type="button" class="btn btn-primary text-center w-20 ">GET IN <br>TOUCH</button>
    <button type="button" class="btn btn-primary text-center w-20">DOWNLOAD A <br> BROCHURE</button>
  </div> -->

    <div class="text-end position-absolute" style="top: 0; right: 10%; transform: translateY(-100%); width: 30%; ">
      <div class="d-flex flex-wrap gap-3">
        <span type="button"
          class="btn btn-primary btn-land  text-center flex-grow-1 btn-main-color text-success fs-6 ">
          GET IN<br>TOUCH
        </span>
        <button type="button" class="btn btn-primary btn-land  text-center flex-grow-1 text-success fs-6">
          DOWNLOAD A<br>BROCHURE
        </button>

      </div>
    </div>
    <!-- <button type="button" class="btn btn-primary text-center w-20">DOWNLOAD A <br> BROCHURE</button> -->
  </div>








  <script src="assets/js/custom.js" crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>

</html>