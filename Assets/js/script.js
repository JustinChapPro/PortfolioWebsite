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

// Permet de choisir emile ou justin

document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("toggle");
  const justin = document.getElementById("Justin");
  const emile = document.getElementById("Emile");

  toggle.addEventListener("change", function () {
    const imageUrl = this.checked
      ? "./assets/commun/Emile.jpg"
      : "./assets/commun/Justin.jpg";
    document.body.style.backgroundImage = `url('${imageUrl}')`;
    document.body.style.backgroundSize = "contain";
    document.body.style.backgroundPosition = "center center";
    document.body.style.backgroundRepeat = "repeat";

    if (this.checked) {
      justin.style.color = "black";
      emile.style.color = "green";
    } else {
      justin.style.color = "green";
      emile.style.color = "black";
    }
  });
});
