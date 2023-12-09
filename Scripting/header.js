const defaultIcon = document.querySelector("span.defaultIcon");
const closeBtn = document.querySelector("span.closeIcon");
const nav = document.querySelector("nav");
const menuButton = document.querySelector("header section button:first-child");

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


// Profile Button
const proButton = document.querySelector("header section button:last-child");
const aside = document.querySelector("aside.profile-content  ");
proButton.addEventListener("click", (event) => {
   if ( proButton) {
     aside.classList.toggle("asideToggle");
   }

});
