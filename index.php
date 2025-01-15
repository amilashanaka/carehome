<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Care Home Landing Page</title>
  <link href="./src/output.css" rel="stylesheet">
  <style>
    /* Custom styles for sliding nav */
    .nav-slide {
      transform: translateX(-100%);
      transition: transform 0.3s ease-in-out;
    }
    .nav-slide.active {
      transform: translateX(0);
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- Navigation -->
  <div class="relative">
    <div class="hidden lg:block bg-white shadow-md">
      <div class="container mx-auto px-6 py-4">
        <nav class="flex justify-between items-center">
          <h2 class="text-lg font-semibold text-gray-800">Care Home</h2>
          <ul class="flex space-x-6">
            <li><a href="#" class="text-gray-700 hover:text-blue-600">Home</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-600">About Us</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-600">Services</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-600">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <button id="menu-toggle" class="p-4 text-gray-800 lg:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <div id="mobile-nav" class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg nav-slide lg:hidden">
      <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h2 class="text-lg font-semibold text-gray-800">Care Home</h2>
        <button id="close-nav" class="text-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <nav class="p-4">
        <ul class="space-y-4">
          <li><a href="#" class="text-gray-700 hover:text-blue-600">Home</a></li>
          <li><a href="#" class="text-gray-700 hover:text-blue-600">About Us</a></li>
          <li><a href="#" class="text-gray-700 hover:text-blue-600">Services</a></li>
          <li><a href="#" class="text-gray-700 hover:text-blue-600">Contact</a></li>
        </ul>
      </nav>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 pointer-events-none hidden lg:hidden"></div>
  </div>

  <!-- Main Content -->
  <div class="flex flex-col items-center justify-center h-screen px-4 text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome to Our Care Home</h1>
    <p class="text-gray-600 mb-6 max-w-lg">
      Providing exceptional care and a safe, loving environment for your loved ones.
    </p>
    <button class="bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700">
      Learn More
    </button>
  </div>

  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const closeNav = document.getElementById('close-nav');
    const mobileNav = document.getElementById('mobile-nav');
    const overlay = document.getElementById('overlay');

    menuToggle.addEventListener('click', () => {
      mobileNav.classList.toggle('active');
      overlay.classList.toggle('hidden');
    });

    closeNav.addEventListener('click', () => {
      mobileNav.classList.remove('active');
      overlay.classList.add('hidden');
    });

    overlay.addEventListener('click', () => {
      mobileNav.classList.remove('active');
      overlay.classList.add('hidden');
    });
  </script>
</body>
</html>
