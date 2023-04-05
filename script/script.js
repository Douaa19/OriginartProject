document.querySelector(".theme-toggle-button").addEventListener("click", () => {
  document.body.classList.toggle("dark");
  document.getElementById("moon").style.display = "none";
  document.getElementById("sun").style.display = "block";
});
