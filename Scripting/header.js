const menuButton = document.querySelector("header aside button");

const defaultIcon = document.querySelector("span.defaultIcon");
const closeBtn = document.querySelector("span.closeIcon");
const nav = document.querySelector("nav");


menuButton.addEventListener("click", (event) => {

  if (event.target.classList.contains("defaultIcon")) {
    defaultIcon.classList.replace("defaultIcon", "closeIcon");
    closeBtn.classList.add("closeIconToggle");
    closeBtn.animate({ transform: "rotateZ(90deg)" }, 100);
    nav.classList.add("navToggle");
    nav.animate({ opacity: ["0", "1"] }, 500);
  } else {
    defaultIcon.classList.replace("closeIcon", "defaultIcon");
    defaultIcon.animate({ transform: "rotateZ(-90deg)" }, 100);
    closeBtn.classList.remove("closeIconToggle");
    nav.classList.remove("navToggle");
  }
});



const languages = [
  "Welcome to your Dashboard",
  "Get information about all customers",
  "Making your work easy",
];

const typedText = document.querySelector(".typed-word");
const typingDelay = 300;
const erasingDelay = 200;
const newWordDelay = 300;
let wordIndex = 0;
let charIndex = 0;

const typer = () => {
  if (charIndex < languages[wordIndex].length) {
    typedText.textContent += languages[wordIndex].charAt(charIndex);
    charIndex++;
    setTimeout(typer, typingDelay);
  } else {
    setTimeout(eraser, newWordDelay);
  }
};

const eraser = () => {
  if (charIndex > 0) {
    typedText.textContent = languages[wordIndex].substring(0, charIndex - 1);
    charIndex--;
    setTimeout(eraser, erasingDelay);
  } else {
    wordIndex++;
    if (wordIndex >= languages.length) {
      wordIndex = 0;
    }
    setTimeout(typer, erasingDelay + 1100);
  }
};

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(typer, newWordDelay + 250);
});