<!-- footer -->

<footer class="footer">
<section>
  <div class="container">
    <div class="row align-items-start">
      <!-- Logo and Social Media -->
      <div class="col-lg-3 col-md-3 col-6">
        <div class="logo">
          <img src="assets/images/logo.png" alt="Logo">
   
        </div>
        <p class="mt-3">Copyright 2025 EtronicsSolutions<br>All Rights Reserved</p>
        <div class="social-icons mt-3">
          <a href="<?= $setting->getSettings('f7') ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?= $setting->getSettings('f8') ?>" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
          <a href="<?= $setting->getSettings('f9') ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        </div>
      </div>

      <!-- Useful Links -->
      <div class="col-lg-3 col-md-3 col-6">
        <h5>Useful Links</h5>
        <ul class="list-unstyled">
          <li><a href="aboutUs.php">About Us</a></li>
          <li><a href="#">Coming Soon</a></li>
          <li><a href="#">404 Page</a></li>
          <li><a href="#">FAQ Page</a></li>
          <li><a href="ContactUs.php">Contact Us</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-3 col-md-3 col-6">
        <h5>Contact Info</h5>
        <div class="contact-info">
          <p><strong>Address:</strong><br><?= $setting->getSettings('f6') ?></p>
          <p><strong>Email:</strong><br><a href="<?= $setting->getSettings('f5') ?>"><?= $setting->getSettings('f5')?></a></p>
          <p><strong>Phone:</strong><br><?= $setting->getSettings('f4') ?></p>
        </div>
      </div>

      <!-- Instagram -->
      <div class="col-lg-3 col-md-3 col-6">
        <h5>Instagram</h5>
        <div class="instagram-grid d-flex flex-wrap gap-2">
          <img src="assets/images/f1.jpg" alt="Instagram 1" class="img-fluid">
          <img src="assets/images/f2.jpg" alt="Instagram 2" class="img-fluid">
          <img src="assets/images/f3.jpg" alt="Instagram 3" class="img-fluid">
          <img src="assets/images/f4.jpg" alt="Instagram 4" class="img-fluid">
          <img src="assets/images/f5.jpg" alt="Instagram 5" class="img-fluid">
          <img src="assets/images/f6.jpg" alt="Instagram 6" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>


  <button
    type="button"
    class="btn btn-success btn-floating btn-lg float-lg-right"
    id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>
</footer>


<script>
  //Get the button
  let mybutton = document.getElementById("btn-back-to-top");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  mybutton.addEventListener("click", backToTop);

  function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>

<!-- Footer End -->
<script src="assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/jquery-3.7.1.js" crossorigin="anonymous"></script>
<script src="assets/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="assets/js/custom.js" crossorigin="anonymous"></script>
<script src="assets/js/slider.js" crossorigin="anonymous"></script>

</body>



</html>