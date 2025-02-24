<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm fw-bold site-main-name-font sticky-top"
  style="background-color: #ffffff; color: #ff5722; z-index: 1030;">
  <div class="container-fluid">
    <button id="menu-toggle" class="btn btn-outline-primary d-lg-none">
      <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand fw-bold align-items-center d-flex" href="#">
      <img src="assets/images/logo.png" alt="Logo" class="me-2 navbar-brand-img ps-2">
      <span class="site-main-name-font fs-3 custom-font lh-1">
        <div class="fs-3 site-main-name-font"><?= $setting->getSettings('f1')?></div>
        <div class="fs-3 text-center site-sub-name-color"><?= $setting->getSettings('f2')?></div>
      </span>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link font-color-change" href="index" id="home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="events" id="aboutus">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="aboutus" id="aboutUs">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="ourhomes">OUR HOMES</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle font-color-change" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            OUR CARE
          </a>
          <ul class="dropdown-menu sub-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="nursing">NURSING CARE</a></li>
            <li><a class="dropdown-item" href="dementiacare">DEMENTIA CARE</a></li>
            <li><a class="dropdown-item" href="residentialcare">RESIDENTIAL CARE</a></li>
            <li><a class="dropdown-item" href="respite">RESPITE CARE</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle font-color-change" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            OUR PEOPLE
          </a>
          <ul class="dropdown-menu sub-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="career">CAREERS</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link font-color-change" href="news.php">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="contactUs.php">CONTACT US</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Mobile Navigation -->
<!-- Overlay -->
<div id="overlay" class="position-fixed top-0 start-0 w-100 h-100 bg-opacity-10">
  
</div>
<div id="mobile-nav" class="mobile-nav position-fixed top-0 start-0 h-100 bg-white shadow-lg p-4 w-50">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold site-main-name-font">NB CARE</h5>
    <button id="close-nav" class="btn btn-outline-secondary">
      <i class="fas fa-times"></i>
    </button>
  </div>
  <ul class="nav flex-column ">
    <a class="nav-link site-main-name-font" href="#">HOME</a>
    <a class="nav-link site-main-name-font " href="#">EVENTS</a>
    <a class="nav-link site-main-name-font" href="aboutUs.php">ABOUT US</a>
    <a class="nav-link site-main-name-font" href="#">OUR HOMES</a>
    <div>
      <a class="nav-link site-main-name-font" href="#" data-bs-toggle="collapse" data-bs-target="#careSubmenu">OUR
        CARE</a>
      <div id="careSubmenu" class="collapse ps-3">
        <a class="nav-link site-sub-name-color" href="#">NURSING CARE</a>
        <a class="nav-link site-sub-name-color" href="#">DEMENTIA CARE</a>
        <a class="nav-link site-sub-name-color" href="#">RESIDENTIAL CARE</a>
        <a class="nav-link site-sub-name-color" href="#">RESPITE CARE</a>
      </div>
    </div>
    <div>
      <a class="nav-link site-main-name-font" href="#" data-bs-toggle="collapse" data-bs-target="#peopleSubmenu">OUR
        PEOPLE</a>
      <div id="peopleSubmenu" class="collapse ps-3">
        <a class="nav-link site-sub-name-color" href="#">CAREERS</a>
      </div>
    </div>
    <a class="nav-link site-main-name-font" href="#">NEWS</a>
    <a class="nav-link site-main-name-font" href="contactUs.php">CONTACT US</a>
  </ul>

  <div class="social-icons mt-3 mb-4">
    <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
    <a href="#" aria-label="Intragram"><i class="bi bi-instagram"></i></a>
  </div>

  <div class="d-flex mb-4">
    <i class="bi bi-geo-alt site-main-name-font me-2"></i>
    <!-- Address -->
    <p class="mb-0"><?= $setting->getSettings('f6')?></p> 
  </div>
  <div class="d-flex mb-4">
    <i class="bi bi-envelope-open site-main-name-font me-2"></i>
    <!-- Email -->
    <p class="mb-0"><?= $setting->getSettings('f5')?></p>  
  </div>
  <div class="d-flex mb-4">
    <i class="bi bi-telephone site-main-name-font me-2"></i>
    <p class="mb-0"><?= $setting->getSettings('f4')?></p>
  </div>
</div>