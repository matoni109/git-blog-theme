(() => {
  // resources/js/components/hamburger-menu.js
  var setupNavigationToggle = () => {
    const main_navigation = document.querySelector("#primary-menu");
    const main_navigation_button = document.querySelector("#primary-menu-button");
    const { classList: line1ClassList } = document.querySelector(".line-1-closed");
    const { classList: line2ClassList } = document.querySelector(".line-2-closed");
    const { classList: line3ClassList } = document.querySelector(".line-3-closed");
    const primaryMenuToggle = document.querySelector("#primary-menu-toggle");
    if (primaryMenuToggle) {
      primaryMenuToggle.addEventListener("click", (e) => {
        e.preventDefault();
        main_navigation.classList.toggle("hidden");
        main_navigation_button.classList.toggle("hidden");
        line1ClassList.toggle("line-1-open");
        line1ClassList.toggle("line-1-closed");
        line2ClassList.toggle("line-2-open");
        line2ClassList.toggle("line-2-closed");
        line3ClassList.toggle("line-3-open");
        line3ClassList.toggle("line-3-closed");
      });
    }
  };
  window.addEventListener("load", setupNavigationToggle);

  // resources/js/components/header-search-form.js
  console.info("hello console");
})();
