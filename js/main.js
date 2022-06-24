const toggler = document.getElementById("toggler");
const closer = document.getElementById("closer");
const menu = document.getElementById("menu");

toggler.addEventListener("click", () => {
  menu.style.right = "0";
});
closer.addEventListener("click", () => {
  menu.style.right = "-200px";
});
