const languages = ["Welcome Teller", "This is your Transaction Portal", "Making Transactions easier"];
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
