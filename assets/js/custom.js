const menuToggle = document.getElementById('menu-toggle');
const closeNav = document.getElementById('close-nav');
const mobileNav = document.getElementById('mobile-nav');
const overlay = document.getElementById('overlay');

menuToggle.addEventListener('click', () => {
  mobileNav.classList.add('active');
  overlay.classList.add('active');
});

closeNav.addEventListener('click', () => {
  mobileNav.classList.remove('active');
  overlay.classList.remove('active');
});

overlay.addEventListener('click', () => {
  mobileNav.classList.remove('active');
  overlay.classList.remove('active');
});

function changeColor(element) {
  document.querySelectorAll('.nav-link').forEach(link => link.style.color = '');
  element.style.color = 'purple';
}
