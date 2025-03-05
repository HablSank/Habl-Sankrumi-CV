const menuNav = document.querySelector(".navbar-nav");
const hamburger = document.querySelector(".hamburger");


hamburger.addEventListener("click", () => {
  menuNav.classList.toggle("active");
});


const navLinks = document.querySelectorAll(".menu a");
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    menuNav.classList.remove("active");
  });
});