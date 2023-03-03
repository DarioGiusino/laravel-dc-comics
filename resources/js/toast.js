const closeBtn = document.querySelector(".btn-alert");
const toast = document.querySelector(".alert-toast");

closeBtn.addEventListener("click", () => {
    toast.classList.add("dissolving");
});

setInterval(() => {
    toast.classList.add("dissolving");
}, 3000);
