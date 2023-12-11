const mobileMenu = document.querySelector(".mobile-menu");
const menuBtnOpen = document.querySelector(".menu-btn-open");
const menuBtnClose = document.querySelector(".menu-btn-close");
const mobileMenuLinks = document.querySelectorAll(".mobile-menu__link");

const toggleMenu = () => {
  mobileMenu.classList.toggle("is-open");
  document.body.classList.toggle("is-scroll-disabled");
};

menuBtnOpen.addEventListener("click", toggleMenu);
menuBtnClose.addEventListener("click", toggleMenu);

mobileMenuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    if (mobileMenu.classList.contains("is-open")) {
      toggleMenu();
    }
  });
});
