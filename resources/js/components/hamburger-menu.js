const setupNavigationToggle = () => {
  const mobile_list_menu = document.querySelector("#mobile-list-menu");
  const mobile_menu = document.querySelector("#mobile-menu");
  const mobile_contact_us_button = document.querySelector(
    "#contact-us-mobile-button"
  );

  const { classList: line1ClassList } =
    document.querySelector(".line-1-closed");
  const { classList: line2ClassList } =
    document.querySelector(".line-2-closed");
  const { classList: line3ClassList } =
    document.querySelector(".line-3-closed");

  const hamburgerMenuToggle = document.querySelector("#hamburger-menu-toggle");

  if (hamburgerMenuToggle) {
    hamburgerMenuToggle.addEventListener("click", (e) => {
      e.preventDefault();
      mobile_list_menu.classList.toggle("hidden");
      mobile_contact_us_button.classList.toggle("hidden");
      mobile_menu.classList.toggle("pb-3");

      // Toggle the classes for hamburger
      line1ClassList.toggle("line-1-open");
      line1ClassList.toggle("line-1-closed");
      line2ClassList.toggle("line-2-open");
      line2ClassList.toggle("line-2-closed");
      line3ClassList.toggle("line-3-open");
      line3ClassList.toggle("line-3-closed");
    });
  }
};

// Call the setupNavigationToggle function when the page is loaded
window.addEventListener("load", setupNavigationToggle);
