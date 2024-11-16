const setupSearchToggle = () => {
  const searchToggles = document.querySelectorAll(".primary-search-toggle");
  const main_search_form = document.querySelector("#header-search");

  searchToggles.forEach((toggle) => {
    toggle.addEventListener("click", (e) => {
      e.preventDefault();
      main_search_form.classList.toggle("hidden");
    });
  });
};

// Call the setupSearchToggle function when the page is loaded
window.addEventListener("load", setupSearchToggle);
