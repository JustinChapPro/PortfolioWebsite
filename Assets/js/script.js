const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navbar-nav");

hamburger.addEventListener("click", function () {
  if (navMenu.style.display === "block") navMenu.style.display = "none";
  else navMenu.style.display = "block";
});

const connectionOption = document.querySelector("#connection-option");
const connectionForm = document.querySelector("#div-form-user-connection");

connectionOption.addEventListener("click", function () {
  if (connectionForm.style.display === "block")
    connectionForm.style.display = "none";
  else connectionForm.style.display = "block";
});

// // Permet de choisir emile ou justin
const toggle = document.getElementById("toggle");
const justin = document.getElementById("Justin");
const emile = document.getElementById("Emile");

toggle.addEventListener("change", function () {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const url = urlParams.get('person');
  
  console.log(url);

  if (url !== 'undefined' || url !== '') {
    if (url === "Justin")
      urlParams.set('person', 'Emile');
    else
      urlParams.set('person', 'Justin');
  }
  else {
    urlParams.set('person', 'Emile');
  }

  const newUrl = window.location.origin + window.location.pathname + '?' + urlParams.toString();
  window.location.replace(newUrl);
});

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}