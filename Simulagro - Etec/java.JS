let show = true;

const menuSeçao = document.querySelector(".menu-seçao")
const menuToggle = document.querySelector(".menu-toggle")

menuToggle.addEventListener("click", () => {

    document.body.style.overflow = show ? "hidden" : "initial"
    menuSeçao.classList.toggle("on", show)
    show = !show;
});

const selected = document.querySelector(".selected")
const optionsContainer = document.querySelector(".options-container")

const optionsList = document.querySelectorAll(".option")

selected.addEventListener("click", () => {

    optionsContainer.classList.toggle("on")
});

optionsList.forEach(o => {
    o.addEventListener("click", () => {
        selected.innerHTML = o.querySelector("label").innerHTML
        optionsContainer.classList.remove("on")
    });
});