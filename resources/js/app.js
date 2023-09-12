// take this out for vanilla at some point
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// Navigation toggle
window.addEventListener("load", () => {
  let main_navigation = document.querySelector("#primary-menu");
  let main_navigation_button = document.querySelector("#primary-menu-button");

  document
    .querySelector("#primary-menu-toggle")
    .addEventListener("click", (e) => {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
      main_navigation_button.classList.toggle("hidden");
    });
});
