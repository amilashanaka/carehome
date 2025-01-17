 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap 5 Mobile Menu</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 
  <link href="assets/css/custom.css" rel="stylesheet"  crossorigin="anonymous">
</head>
<body class="bg-light">
  <!-- Main Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
      <button id="menu-toggle" class="btn btn-outline-primary d-lg-none">
        <i class="fas fa-bars"></i>
      </button>
      <a class="navbar-brand fw-bold" href="#">My Website</a>
      <div class="collapse navbar-collapse desktop-nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
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
  <main class="container text-center py-5">
    <h1 class="display-4 fw-bold">Welcome to My Website</h1>
    <p class="lead text-muted">Your gateway to excellence and innovation.</p>
    <a href="#" class="btn btn-primary">Learn More</a>
  </main>

  <script src="assets/js/custom.js"   crossorigin="anonymous"></script>
 <script src="assets/js/bootstrap.bundle.min.js"   crossorigin="anonymous"></script>


</body>
</html>
