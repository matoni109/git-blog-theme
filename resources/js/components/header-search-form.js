const setupSearchToggle = () => {
  const main_search = document.querySelector("#primary-search-toggle");
  const main_search_form = document.querySelector("#header-search");

  if (main_search) {
    main_search.addEventListener("click", (e) => {
      e.preventDefault();
      main_search_form.classList.toggle("hidden");
      // main_navigation_button.classList.toggle("hidden");
      console.info("clicked search");
    });
  }
};

// Call the setupSearchToggle function when the page is loaded
window.addEventListener("load", setupSearchToggle);
