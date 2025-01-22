const mainContent = document.getElementById("mainContent");
const home = document.getElementById("home");
const aboutUs = document.getElementById("aboutUs");


// load home initially
document.addEventListener("DOMContentLoaded", () => {
  const mainContent = document.querySelector("main");
  fetch("assets/Pages/home.html")
    .then((response) => {
      if (!response.ok) {
        throw new Error("Failed to load page.");
      }
      return response.text();
    })
    .then((html) => {
      mainContent.innerHTML = html;
    })
    .catch((error) => {
        errorMsg();
    });
});

// Load home when click home
home.addEventListener("click", () => {
  fetch("assets/pages/home.html")
    .then((response) => {
      if (response.ok) {
        return response.text(); // Parse the HTML text
      } else {
        throw new Error("Error loading About Us page");
      }
    })
    .then((data) => {
      mainContent.innerHTML = data;
    })
    .catch((error) => {
        errorMsg();
    });
});

// Load aboutUs when click aboutUs
aboutUs.addEventListener("click", () => {
  fetch("assets/pages/aboutus.html")
    .then((response) => {
      if (response.ok) {
        return response.text();
      } else {
        throw new Error("Error loading About Us page");
      }
    })
    .then((data) => {
      mainContent.innerHTML = data;
    })
    .catch((error) => {
        errorMsg(error);
    });
});

function errorMsg(error) {
    console.error("Error loading About Us page:", error);
    mainContent.innerHTML = "<p>Sorry, we couldn't load the content.</p>";

}
document.getElementById("year").textContent = new Date().getFullYear();