const initializeAuthorProfile = () => {
  const authorProfileImgContainer = document.querySelector(
    "#author-profile-img span"
  );

  if (!authorProfileImgContainer) {
    return null;
  } else {
    const authorFirstNameText =
      document.querySelector("#author-firstname").textContent;
    const authorLastNameText =
      document.querySelector("#author-lastname").textContent;

    let initials = `${authorFirstNameText.charAt(0)}${authorLastNameText.charAt(
      0
    )}`;
    initials = initials ? initials : "A";

    // Set the text.
    authorProfileImgContainer.textContent = initials;
  }
};

window.addEventListener("load", initializeAuthorProfile);
