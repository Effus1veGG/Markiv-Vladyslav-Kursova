const modal = document.querySelector(".backdrop");
const modalBtnOpen = document.querySelectorAll(".modal-btn-open");
const modalBtnClose = document.querySelectorAll(".modal-btn-close");

const openModal = () => modal.classList.remove("is-hidden");
const closeModal = () => modal.classList.add("is-hidden");

modalBtnOpen.forEach((btn) => {
  btn.addEventListener("click", openModal);
});

modalBtnClose.forEach((btn) => {
  btn.addEventListener("click", closeModal);
});
