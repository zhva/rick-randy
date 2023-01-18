
const firstColumn = document.getElementById('contact-info-wrapper');
let secondColumn = document.getElementById('contact-info');
secondColumn.style.height = firstColumn.clientHeight + "px";

const nav = document.getElementById('nav');
const button = document.getElementById('hamburgerId');
const topBar = document.getElementById('topBar');
const menuContent = document.getElementById('menuContent');
const titleContent = document.getElementById('titleContent');
const titleAccount = document.getElementById('titleAccount');
const menuJoke = document.getElementById('menuJoke');

window.addEventListener('load', toggleCSSClass);
window.addEventListener('resize', toggleCSSClass);

function toggleCSSClass() {
  console.log("Inside toggle")
  if(this.window.innerWidth <= 1280) {
    nav.classList.add("mobile-menu");
    nav.classList.add("d-none-menu");
    button.classList.remove("close");
    topBar.classList.add("d-none");
    menuContent.classList.add("d-none");
    titleContent.classList.add("d-none");
    titleAccount.classList.add("d-none");
    menuJoke.classList.add("d-none");
  }
  else {
    nav.classList.remove("mobile-menu");
    menuContent.classList.remove("d-none");
  }
}
function onButtonClick() {
  nav.classList.toggle("d-none-menu");
  button.classList.toggle("close");
  topBar.classList.toggle("d-none");
  menuContent.classList.toggle("d-none");
  titleContent.classList.toggle("d-none");
  titleAccount.classList.toggle("d-none");
  menuJoke.classList.toggle("d-none");
}
button.addEventListener("click", onButtonClick);
