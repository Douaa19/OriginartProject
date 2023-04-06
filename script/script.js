let navLogo = document.getElementById("nav-logo");
let footerBigLogo = document.getElementById("footer-big-logo");
let footerSmallLogo = document.getElementById("footer-small-logo");

document.querySelector(".theme-toggle-button").addEventListener("click", () => {
  document.body.classList.toggle("dark");
  changeImg();
  document.getElementById("moon").style.display = "none";
  document.createElement('i');
});

const changeImg = () => {
  let whiteNavLogo = "./images/Or logo-white.svg";
  let blackNavLogo = "./images/Or logo-Black.svg";
  let whiteFooterBigLogo = "./images/Originart logo-white";
  let blackFooterBigLogo = "./images/Logo originart -01-Black.svg";
  let whiteFooterSmallLogo = whiteNavLogo;
  let blackFooterSmallLogo = blackNavLogo;

  // Nav Logo
  navLogo.src = navLogo.src === blackNavLogo ? whiteNavLogo : blackNavLogo;

  // Footer Big Logo
  footerBigLogo.src =
    navLogo.src === blackFooterBigLogo
      ? whiteFooterBigLogo
      : blackFooterBigLogo;

  // Footer Small Logo
  footerSmallLogo.src =
    footerSmallLogo.src === blackFooterSmallLogo
      ? whiteFooterSmallLogo
      : blackFooterSmallLogo;
};
