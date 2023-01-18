
const firstColumn = document.getElementById('contact-info-wrapper');
let secondColumn = document.getElementById('contact-info');
secondColumn.style.height = firstColumn.clientHeight + "px";


const button = document.querySelector("#hamburger");
const nav = document.querySelector("#nav");

button.addEventListener("click", function () {
  if (nav.classList.contains("d-none")) {
    nav.classList.remove("d-none");
    nav.classList.add("d-flex");
    button.querySelectorAll("div.line")[0].classList.add("line1");
    button.querySelectorAll("div.line")[1].classList.add("line2");
  } else {
    nav.classList.remove("d-flex");
    nav.classList.add("d-none");
    button.querySelectorAll("div.line")[0].classList.remove("line1");
    button.querySelectorAll("div.line")[1].classList.remove("line2");
  }
});
