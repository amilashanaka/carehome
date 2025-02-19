<?php
include 'header.php';
include 'navbar.php';
// include 'slider.php';

?>
<section class="container-fluid py-5" style="background-color: #f4faff;">
  <div class="row mt-1">
    <!-- Text Content -->
    <div class="col-lg-6 text-center " >
      <h1 class="custom-title site-main-name-font">Contact <span class="custom-highlight">Us</span></h1>
      <div class="mt-4">
        <h3 class="fw-bold site-main-name-font">Head Office:</h3>
        <p class="fs-4 site-main-name-font"><strong>Email:</strong> <a href="<?= $setting->getSettings('f5')?>" class="text-dark"><?= $setting->getSettings('f5')?></a></p>
        <p class="fs-4 site-main-name-font"><strong>General Enquiries:</strong> <a href="<?= $setting->getSettings('f4')?>" class="text-dark"><?= $setting->getSettings('f4')?></a></p>
    </div>
    <p class="fst-italic text-muted px-3">
        No employee is authorised to conclude any binding agreement on behalf of Macc Group with another party by email/phone without express written confirmation from a Director.
    </p>

    <div class="mt-4">
        <h5 class="fw-bold site-main-name-font">All care home enquiries:</h5>
        <p class="text-muted">Please scroll down to view brochures and find the direct contact details for each of homes.</p>
    </div>
    </div>

    <!-- Image -->
    <div class="col-lg-6">
      <div class="position-relative">
        <img src="assets/images/aboutus.png" class="img-fluid " alt="welcome image">
      </div>
    </div>
  </div>
</section>
<?php
include 'home_enquiry.php';
include 'footer.php';
?>