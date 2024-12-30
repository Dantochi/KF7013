const menu_button = document.querySelector("#menu");
const exit_button = document.querySelector("#toggle_close");
menu_button.addEventListener('click', menuToggle)
exit_button.addEventListener('click', menuToggle)
function menuToggle() {
const menu = document.querySelector(".menu-container");
menu.classList.toggle('close');
}
