// Tailwind break-points don't work inside a grid
// this function to check and apply the layout
// based on column width
// replace flex-col md:flex-row-reverse with dynamic-layout
// i ended up taking this out and just using *-card-sm / *-card-lg

const setLayout = () => {
  const gridElements = document.querySelectorAll(".dynamic-layout");

  if (gridElements) {
    gridElements.forEach((gridElement) => {
      const columnWidth = gridElement.clientWidth / 2; // Divide by the number of columns

      // Check if the column width is below a certain threshold
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

// Call the setLayout function initially and on window resize
window.addEventListener("load", setLayout);
window.addEventListener("resize", setLayout);
