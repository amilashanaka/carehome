<?php
// Fetch site main name (f1) and sub name (f2) from backend
$siteMainName = $setting->getSettings('f1');
$siteSubName = $setting->getSettings('f2');

// Define colors for each letter
$letterColors = ['#00C1FF', '#00A650', '#FFD700', '#FF4500', '#FF1493', '#008080', '#FF0000', '#9932CC', '#FFA500', '#32CD32'];
$letters = mb_str_split($siteMainName); // Split into an array of letters
?>
<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm fw-bold site-main-name-font sticky-top nav-padding"
  style="background-color: #ffffff; color: #ff5722; ">
  <div class="container-fluid">
    <button id="menu-toggle" class="btn btn-outline-primary d-lg-none">
      <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand fw-bold align-items-center d-flex" href="#">
      
      <div class="site-title-wrapper border p-2 border-2 mt-0 mb-0" style="background: linear-gradient(to right, #879CC0, #ADB2CD);">
        <div class="site-title">
          <?php foreach ($letters as $index => $letter) { ?>
            <span class="text-shadow-white" style="color: <?= $letterColors[$index % count($letterColors)]; ?>;">
              <?= htmlspecialchars($letter); ?>
            </span>
          <?php } ?>
        </div>
        <div class="site-sub-title text-border-white "><?= htmlspecialchars($siteSubName) ?></div>
      </div>


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
          <a class="nav-link font-color-change" href="news">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-color-change" href="contactUs">CONTACT US</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Mobile Navigation -->
<!-- Overlay with Blur Effect -->
<div id="overlay" class="position-fixed top-0 start-0 w-100 h-100 bg-dark "></div>

<div id="mobile-nav" class="mobile-nav position-fixed top-0 start-0 h-100 bg-white shadow-lg p-4 w-75 ">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold site-main-name-font"><?= $setting->getSettings('f1')?></h5>
    <button id="close-nav" class="btn btn-outline-secondary">
      <i class="fas fa-times"></i>
    </button>
  </div>

  <ul class="nav flex-column">
    <a class="nav-link site-main-name-font text-decoration-underline" href="index">
      <i class="bi bi-house-door me-2"></i>HOME
    </a>
    <a class="nav-link site-main-name-font text-decoration-underline" href="events">
      <i class="bi bi-calendar-event me-2"></i>EVENTS
    </a>
    <a class="nav-link site-main-name-font text-decoration-underline" href="aboutUs">
      <i class="bi bi-info-circle me-2"></i>ABOUT US
    </a>
    <a class="nav-link site-main-name-font text-decoration-underline" href="ourhomes">
      <i class="bi bi-building me-2"></i>OUR HOMES
    </a>

    <!-- Our Care Submenu -->
    <div>
      <a class="nav-link site-main-name-font text-decoration-underline" href="#" data-bs-toggle="collapse"
        data-bs-target="#careSubmenu">
        <i class="bi bi-heart-pulse me-2"></i>OUR CARE
      </a>
      <div id="careSubmenu" class="collapse ps-3">
        <a class="nav-link site-sub-name-color text-decoration-underline" href="nursing">
          <i class="bi bi-plus-circle me-2"></i>NURSING CARE
        </a>
        <a class="nav-link site-sub-name-color text-decoration-underline" href="dementiacare">
          <i class="bi bi-person-hearts me-2"></i>DEMENTIA CARE
        </a>
        <a class="nav-link site-sub-name-color text-decoration-underline" href="residentialcare">
          <i class="bi bi-house-heart me-2"></i>RESIDENTIAL CARE
        </a>
        <a class="nav-link site-sub-name-color text-decoration-underline" href="respite">
          <i class="bi bi-clock-history me-2"></i>RESPITE CARE
        </a>
      </div>
    </div>

    <!-- Our People Submenu -->
    <div>
      <a class="nav-link site-main-name-font text-decoration-underline" href="#" data-bs-toggle="collapse"
        data-bs-target="#peopleSubmenu">
        <i class="bi bi-people me-2"></i>OUR PEOPLE
      </a>
      <div id="peopleSubmenu" class="collapse ps-3">
        <a class="nav-link site-sub-name-color text-decoration-underline" href="career">
          <i class="bi bi-briefcase me-2"></i>CAREERS
        </a>
      </div>
    </div>

    <a class="nav-link site-main-name-font text-decoration-underline" href="news">
      <i class="bi bi-newspaper me-2"></i>NEWS
    </a>
    <a class="nav-link site-main-name-font text-decoration-underline" href="contactUs">
      <i class="bi bi-envelope me-2"></i>CONTACT US
    </a>
  </ul>

  <!-- Social Media Icons -->
  <div class="social-icons mt-3 mb-4">
    <a href="<?= $setting->getSettings('f8') ?>" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
    <a href="<?= $setting->getSettings('f7') ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
    <a href="<?= $setting->getSettings('f9') ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
  </div>

  <!-- Contact Information -->
  <div class="d-flex mb-4">
    <i class="bi bi-geo-alt site-main-name-font me-2"></i>
    <p class="mb-0"><?= $setting->getSettings('f6') ?></p>
  </div>
  <div class="d-flex mb-4">
    <i class="bi bi-envelope-open site-main-name-font me-2"></i>
    <p class="mb-0"><?= $setting->getSettings('f5') ?></p>
  </div>
  <div class="d-flex mb-4">
    <i class="bi bi-telephone site-main-name-font me-2"></i>
    <p class="mb-0"><?= $setting->getSettings('f4') ?></p>
  </div>
</div>