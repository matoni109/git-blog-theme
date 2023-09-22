(() => {
  // resources/js/components/hamburger-menu.js
  var setupNavigationToggle = () => {
    const mobile_list_menu = document.querySelector("#mobile-list-menu");
    const mobile_menu = document.querySelector("#mobile-menu");
    const mobile_contact_us_button = document.querySelector(
      "#contact-us-mobile-button"
    );
    const { classList: line1ClassList } = document.querySelector(".line-1-closed");
    const { classList: line2ClassList } = document.querySelector(".line-2-closed");
    const { classList: line3ClassList } = document.querySelector(".line-3-closed");
    const hamburgerMenuToggle = document.querySelector("#hamburger-menu-toggle");
    if (hamburgerMenuToggle) {
      hamburgerMenuToggle.addEventListener("click", (e) => {
        e.preventDefault();
        mobile_list_menu.classList.toggle("hidden");
        mobile_contact_us_button.classList.toggle("hidden");
        mobile_menu.classList.toggle("pb-3");
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
  var setupSearchToggle = () => {
    const searchToggles = document.querySelectorAll(".primary-search-toggle");
    const main_search_form = document.querySelector("#header-search");
    searchToggles.forEach((toggle) => {
      toggle.addEventListener("click", (e) => {
        e.preventDefault();
        main_search_form.classList.toggle("hidden");
      });
    });
  };
  window.addEventListener("load", setupSearchToggle);

  // resources/js/components/responsive-grid-elements.js
  var setLayout = () => {
    const gridElements = document.querySelectorAll(".dynamic-layout");
    if (gridElements) {
      gridElements.forEach((gridElement) => {
        const columnWidth = gridElement.clientWidth / 2;
        if (columnWidth < 300) {
          gridElement.classList.add("flex-col");
          gridElement.classList.remove("md:flex-row-reverse");
        } else {
          gridElement.classList.remove("flex-col");
          gridElement.classList.add("md:flex-row-reverse");
        }
      });
    }
  };
  window.addEventListener("load", setLayout);
  window.addEventListener("resize", setLayout);
})();
