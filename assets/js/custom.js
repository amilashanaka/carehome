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

// function animateText(elementId) {
//   const text = document.getElementById(elementId);
//   const textContent = text.innerHTML;
//   text.innerHTML = ''; // Clear the content of the element

//   // Wrap each letter in a span
//   for (let i = 0; i < textContent.length; i++) {
//     var out = textContent[i]; 
//     const span = document.createElement('span');
//     if(textContent[i]=="<"){
//       out = "<br>";
//       i += 4;
//     }

//     span.textContent = out;
//     text.appendChild(span);
//     span.style.animationDelay = `${i * 0.1}s`; // Delay each letter
//   }

//   // Add the class for animation
//   text.classList.add('fade-in-text');
// }

// // Trigger the animation after each slide change
// document.addEventListener('slide.bs.carousel', function () {
//   animateText('first-slide-title');
//   animateText('first-slide-text');
// });

// // Initial trigger for the first slide (use setTimeout for initial delay)
// setTimeout(function () {
//   animateText('first-slide-title');
//   animateText('first-slide-text');
// }, 500);  
