const containerNav = document.querySelector(".container-nav");
const navMenu = document.querySelector(".nav-menu");

containerNav.addEventListener("click", () => {
    containerNav.classList.toggle('active');
    navMenu.classList.toggle('active');
});