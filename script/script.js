document.querySelector(".theme-toggle-button").addEventListener("click", () => {
  document.body.classList.toggle("dark");
  document.getElementById("theme").classList.toggle("fa-sun");
  document.getElementById("theme").classList.toggle("fa-moon");
  changeImg();
});

const changeImg = () => {
  let imgNav = document.getElementById("nav-logo");
  let footerSmallLogo = document.getElementById("footer-small-logo");
  let footerBigLogo = document.getElementById("footer-big-logo");

  if (imgNav.src.endsWith("Or-logo-white.svg")) {
    imgNav.setAttribute("src", "./images/Or-logo-Black.svg");
  } else {
    imgNav.setAttribute("src", "./images/Or-logo-white.svg");
  }

  if (footerSmallLogo.src.endsWith("Or-logo-white.svg")) {
    footerSmallLogo.setAttribute("src", "./images/Or-logo-Black.svg");
  } else {
    footerSmallLogo.setAttribute("src", "./images/Or-logo-white.svg");
  }

  if (footerBigLogo.src.endsWith("Originart-logo-white.svg")) {
    footerBigLogo.setAttribute("src", "./images/Logo-originart-Black.svg");
  } else {
    footerBigLogo.setAttribute("src", "./images/Originart-logo-white.svg");
  }
};
