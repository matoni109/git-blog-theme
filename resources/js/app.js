// Navigation toggle
window.addEventListener("load", () => {
  const main_navigation = document.querySelector("#primary-menu");
  const main_navigation_button = document.querySelector("#primary-menu-button");

  const line1 = document.querySelector(".line-1-closed");
  const line2 = document.querySelector(".line-2-closed");
  const line3 = document.querySelector(".line-3-closed");

  document
    .querySelector("#primary-menu-toggle")
    .addEventListener("click", (e) => {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
      main_navigation_button.classList.toggle("hidden");

      // Toggle the classes for hamburger
      line1.classList.toggle("line-1-open");
      line1.classList.toggle("line-1-closed");
      line2.classList.toggle("line-2-open");
      line2.classList.toggle("line-2-closed");
      line3.classList.toggle("line-3-open");
      line3.classList.toggle("line-3-closed");
    });
});
