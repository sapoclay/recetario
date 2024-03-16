const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");

// Mostrar el menú móvil
hamburgerBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});

// Esconder el menú móvil
hideMenuBtn.addEventListener("click", () =>  hamburgerBtn.click());

// Mostrar el popup de login
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

// Esconder el popup del login
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

// Mostrar o esconder el menú de registro
signupLoginLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
    });
});