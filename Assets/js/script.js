document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".navbar-nav");

  hamburger.addEventListener("click", function () {
    if (navMenu.style.display === "block") {
      navMenu.style.display = "none";
    } else {
      navMenu.style.display = "block";
    }
  });
});
