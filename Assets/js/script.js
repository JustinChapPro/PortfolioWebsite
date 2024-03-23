const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navbar-nav");

hamburger.addEventListener("click", function () {
  if (navMenu.style.display === "block")
    navMenu.style.display = "none";
  else
    navMenu.style.display = "block";
});

const connectionOption = document.querySelector("#connection-option");
const connectionForm = document.querySelector("#div-form-user-connection");

connectionOption.addEventListener("click", function () {
  if (connectionForm.style.display === "block")
    connectionForm.style.display = "none";
  else
    connectionForm.style.display = "block";
});