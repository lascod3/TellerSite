const menuBtn = document.querySelector("span.defaultIcon");
const closeBtn = document.querySelector("span.closeIcon");

const button = document.querySelector("header section button:first-child");

button.addEventListener("click", (event) => {
  if (event.target.classList.contains("defaultIcon")) {
    alert("Hello, world!");
  }
});
