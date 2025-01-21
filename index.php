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
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm fw-bold text-success" style="color:#ff5722 ;">
    <div class="container-fluid">
      <button id="menu-toggle" class="btn btn-outline-primary d-lg-none ">
        <i class="fas fa-bars"></i>
      </button>
      <a class="navbar-brand fw-bold align-items-center d-flex" href="#">
        <img src="assets/images/logo.png" alt="Logo" class="me-2 navbar-brand-img ps-5">
        <span class="text-success fs-3 custom-font lh-1" >
          <div class="fs-1 site-main-name-font">NEW BEGINNINGS</div>
          <div class="fs-2 text-center site-sub-name-font">BRISTOL LIMITED</div>
        </span>
      </a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link font-color-change" href="#" id="home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-color-change" href="#" id="aboutUs">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-color-change" href="#">OUR HOMES</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle font-color-change" href="#" id="careDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              OUR CARE
            </a>
            <div class="dropdown-menu dropdown-menu-end " aria-labelledby="careDropdown" >
              <div class="d-flex ">
                <div><a class="dropdown-item" href="#">NURSING CARE</a></div>
                <div><a class="dropdown-item" href="#">DEMENTIA CARE</a></div>
                <div><a class="dropdown-item" href="#">RESIDENTIAL CARE</a></div>
                <div><a class="dropdown-item" href="#">RESPITE CARE</a></div>
              </div>
                
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle font-color-change" href="#" id="pplDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              OUR PEOPLE
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="pplDropdown" >
              <div class="d-flex ">
                <div><a class="dropdown-item " href="#" >CAREERS</a></div>
              </div>
                
            </div>
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
      <li class="nav-item"><a class="nav-link" href="#" >Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#" id="aboutUsBtn">About Us</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    </ul>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>

  <!-- Main Content -->
   <main >
   
  </main>
   <!-- Footer Top -->
  <footer class="bg-secondary text-white" >
    <div class="fs-2 text-white" style="background-color:#e3f2fd">
      <div class="d-flex align-items-center justify-content-center py-3 media-strip-color" >
      <p class="mb-0 me-5">FOLLOW US FOR REGULAR UPDATES</p>
      <a href="#" class="text-white me-4"><i class="fab fa-facebook fa-lg"></i></a>
      <a href="#" class="text-white me-4"><i class="fab fa-twitter fa-lg"></i></a>
      <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
      </div>

    </div>
  <div class="container">
    <div class="row  justify-content-end">
      <!-- Column 1 -->
      <div class="col-md-2" >
        <ul class="list-unstyled pt-5" >
          <li><a href="#" class="text-white text-decoration-none">Privacy policy</a></li>
          <li><a href="#" class="text-white text-decoration-none">Cookies policy</a></li>
          <li><a href="#" class="text-white text-decoration-none">Modern Slavery Statement</a></li>
          <li><a href="#" class="text-white text-decoration-none">Gender PayGap Report</a></li>
          <li><a href="#" class="text-white text-decoration-none">Site Map</a></li>
          <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
          <li><a href="#" class="text-white text-decoration-none">Company number:123456</a></li>
        </ul>
      </div>

      <!-- Column 2 -->
      <div class="col-md-10 d-flex align-items-start pt-5 text-end" >
      <img src="assets/images/logo.png" alt="Logo"  class="ms-auto">
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="text-center mt-4">
      <p class="mb-0">&copy; 2025 Etronic. All Rights Reserved.</p>
    </div>
  </div>
</footer>

  <script src="assets/js/default-loader.js" crossorigin="anonymous"></script>
  <script src="assets/js/custom.js" crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>

</html>