// document.getElementById('aboutUsBtn').addEventListener('click', function(event) {
//     // Prevent default link behavior
//     event.preventDefault();
  
//     // Fetch the content of the aboutus.html page
//     fetch('assets/pages/aboutus.html')
//       .then(response => {
//         if (response.ok) {
//           return response.text(); // Parse the HTML text
//         } else {
//           throw new Error('Error loading About Us page');
//         }
//       })
//       .then(data => {
//         // Insert the content into the main element
//         document.getElementById('mainContent').innerHTML = data;
//       })
//       .catch(error => {
//         console.error('Error loading About Us page:', error);
//         document.getElementById('mainContent').innerHTML = '<p>Sorry, we couldn\'t load the content.</p>';
//       });
//   });
  